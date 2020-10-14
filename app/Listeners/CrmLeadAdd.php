<?php

namespace App\Listeners;

use App\Config;
use App\Events\LeadFormSubmitted;
use App\Mail\OrderReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail as Mail;

class CrmLeadAdd
{
    protected $utm;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LeadFormSubmitted  $event
     * @return void
     */
    public function handle(LeadFormSubmitted $event)
    {
        // преобразование utm в понятный Битриксу формат (uppercase)
        foreach ($event->data as $key=>$val) {
            if(strripos($key, 'utm') === 0) {
                $this->utm[strtoupper($key)] = $val;
            }
        }

        //dd($event->data);

        $config['bitrix24_domain'] = 'industriyaokonaliro';
        $config['bitrix24_webhook_key'] = 'z2pdce9gfgqy6rnf';
        $config['source_id'] = 7; // Источник Лида (согласно справочнику CRM)

        // формируем URL в переменной $queryUrl
        $queryUrl = 'https://' . $config['bitrix24_domain'] . '.bitrix24.ru/rest/1/' . $config['bitrix24_webhook_key'] . '/crm.lead.add.json';
        // формируем параметры для создания лида в переменной $queryData

        if (!array_key_exists('name', $event->data)) {
            $event->data['name'] = 'Неизвестный';
        }

        $fields_array = [
            'TITLE' => 'Заявка с сайта - ' . $event->data['name'],
            'NAME' => $event->data['name'],
            'PHONE' => Array(
                "n0" => Array(
                    "VALUE" => $event->data['phone'],
                    "VALUE_TYPE" => "MOBILE",
                ),
            ),
            "SOURCE_ID" => $config['source_id'],
            'COMMENTS' => 'Заполнена форма: "' . $event->data['form_name'] . '"',
            'UF_CRM_1579985099' => $event->data['form_name'],
        ];

        if(is_array($this->utm)) {
            $fields = array_merge($this->utm, $fields_array);
        } else {
            $fields = $fields_array;
        }

        $query_data = array(
            'fields' => $fields,
            'params' => array("REGISTER_SONET_EVENT" => "Y")
        );

        $queryData = http_build_query($query_data);

        // обращаемся к Битрикс24 при помощи функции curl_exec
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ));

        $result = curl_exec($curl);

        if($errno = curl_errno($curl)) {
            $error_message = curl_strerror($errno);
            dd("cURL error ({$errno}):\n {$error_message}");
        }


        $result = json_decode($result, 1);
        if (array_key_exists('error', $result) && env('APP_DEBUG')) {
            //dd("Ошибка при сохранении лида: " . $result['error_description']);
        }
    }
}
