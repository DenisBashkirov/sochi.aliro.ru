<?php

namespace App\Http\Controllers\Frontend;

use App\Events\LeadFormSubmitted;
use App\Mail\OrderReceived;
use Dadata\DadataClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Route;
use Cookie;
use Illuminate\Support\Facades\Mail as Mail;

class FrontendOutputController extends FrontendBaseController
{
    protected $route_name;
    protected $page;

    public function __construct(Request $request) {

        // сохраняем utm из url в сессию
        foreach ($request->input() as $key=>$val) {
            if(strripos($key, 'utm') === 0) {
                session([$key => $val]);
            }
        }

        // Случай перехода не по рекламе (нет utm, но есть источник)
        if(!session('utm_source') & array_key_exists('HTTP_REFERER', $_SERVER)) {
            $referer = $_SERVER['HTTP_REFERER'];
            $referer = explode('//', $referer)[1];
            if (mb_strpos($referer, 'www') === false) {
                $source = explode('.', $referer)[0];
            } else {
                $source = explode('.', $referer)[1];
            }

            session(['utm_source' => $source]);

            if ($source = 'google' || $source = 'yandex') {
                session(['utm_medium' => 'organic']);
            }

        }

        // Случай прямого входа на сайт (нет utm_source и нет источника перехода)
        if(!session('utm_source') & !array_key_exists('HTTP_REFERER', $_SERVER)) {
            session(['utm_source' => '(direct)']);
            session(['utm_medium' => '']);
        }


        $this->route_name = Route::currentRouteName();
        $this->template = 'frontend.pages.' . $this->route_name;
        View::share('current_route', $this->route_name);

        $current_urn = str_replace(env('APP_URL'), '', URL::current());
        if ($current_urn == '')
            $current_urn = '/';

        $phones = [
            'krasnodar' => [
                'office' => [
                    'default' => '8 (861) 213-92-92',
                    'yandex_direct' => '8 (861) 213-92-67',
                    'google_ads' => '8 (861) 213-92-79'
                ],
                'mobile' => [
                    'default' => '8 (928) 036-04-77',
                    'yandex_direct' => '8 (928) 036-10-60',
                    'google_ads' => '8 (928) 036-68-65'
                ]
            ],
            'sochi' => [
                'office' => [
                    'default' => '8 (862) 300-01-84',
                    'yandex_direct' => '8 (862) 277-71-43',
                    'google_ads' => '8 (862) 277-71-34'
                ],
                'mobile' => [
                    'default' => '8 (928) 036-04-77',
                    'yandex_direct' => '8 (928) 039-19-77',
                    'google_ads' => '8 (928) 041-04-69'
                ]
            ]
        ];

        $company_contacts['address'] = [
            'production' => 'х. Хомуты, Шапсугское шоссе, 75А',
            'office' => [
                'krasnodar' => 'г. Краснодар, ул. Калинина, 258',
                'novoros' => 'г. Новороссийск, ул. Героев-Десантников, 2',
                'sochi' => 'г. Сочи, ул. Транспортная, 5'
            ]
        ];

        switch (session('utm_source')) {

            case 'yandex_direct_sochi':
                $company_contacts['phone']['office']['krasnodar'] = $phones['krasnodar']['office']['yandex_direct'];
                $company_contacts['phone']['office']['sochi'] = $phones['sochi']['office']['yandex_direct'];
                $company_contacts['phone']['mobile']['krasnodar'] = $phones['krasnodar']['mobile']['yandex_direct'];
                $company_contacts['phone']['mobile']['sochi'] = $phones['sochi']['mobile']['yandex_direct'];
                break;

            case 'google_ads_sochi':
                $company_contacts['phone']['office']['krasnodar'] = $phones['krasnodar']['office']['google_ads'];
                $company_contacts['phone']['office']['sochi'] = $phones['sochi']['office']['google_ads'];
                $company_contacts['phone']['mobile']['krasnodar'] = $phones['krasnodar']['mobile']['google_ads'];
                $company_contacts['phone']['mobile']['sochi'] = $phones['sochi']['mobile']['google_ads'];
                break;

            default:
                $company_contacts['phone']['office']['krasnodar'] = $phones['krasnodar']['office']['default'];
                $company_contacts['phone']['office']['sochi'] = $phones['sochi']['office']['default'];
                $company_contacts['phone']['mobile']['krasnodar'] = $phones['krasnodar']['mobile']['default'];
                $company_contacts['phone']['mobile']['sochi'] = $phones['sochi']['mobile']['default'];
                break;

        }

        View::share('company_contacts', $company_contacts);
    }

    public function home() {
        return $this->renderOutput();
    }

    public function thanks(Request $request) {

        $data = array_merge($request->all(), $request->session()->all());

        if($request->method() != 'GET') {
            event(new LeadFormSubmitted($data));
        }

        return $this->renderOutput();
    }

    public function personal_data() {
        return $this->renderOutput();
    }
}
