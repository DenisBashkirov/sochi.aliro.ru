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

        switch (session('utm_source')) {

            case 'yandex_direct':

                $company_contacts['phone']['mobile'] = '8 (928) 036-10-60';
                $company_contacts['phone_href']['mobile'] = '89280361060';

                $company_contacts['phone']['krasnodar'] = '8 (861) 213-92-67';
                $company_contacts['phone_href']['krasnodar'] = '88612139267';

                $company_contacts['phone']['sochi'] = '8 (862) 277-71-43';
                $company_contacts['phone_href']['sochi'] = '88622777143';

                break;

            case 'google_ads':

                $company_contacts['phone']['mobile'] = '8 (928) 036-68-65';
                $company_contacts['phone_href']['mobile'] = '89280366865';

                $company_contacts['phone']['krasnodar'] = '8 (861) 213-92-79';
                $company_contacts['phone_href']['krasnodar'] = '88612139279';

                $company_contacts['phone']['sochi'] = '8 (862) 277-71-34';
                $company_contacts['phone_href']['sochi'] = '88622777134';

                break;

            default:

                $company_contacts['phone']['mobile'] = '8 (928) 036-04-77';
                $company_contacts['phone_href']['mobile'] = '89280360477';

                $company_contacts['phone']['krasnodar'] = '8 (861) 213-92-92';
                $company_contacts['phone_href']['krasnodar'] = '88612139292';

                $company_contacts['phone']['sochi'] = '8 (862) 300-01-84';
                $company_contacts['phone_href']['sochi'] = '88623000184';

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
