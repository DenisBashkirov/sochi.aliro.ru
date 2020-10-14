<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'=>'Frontend\FrontendOutputController@home', 'as'=>'home']);
Route::get('/personal-data-rules', ['uses'=>'Frontend\FrontendOutputController@personal_data', 'as'=>'personal_data']);

if(env('APP_ENV') == 'production') {
    Route::post('/thanks', ['uses'=>'Frontend\FrontendOutputController@thanks', 'as'=>'thanks']);
} else {
    Route::any('/thanks', ['uses'=>'Frontend\FrontendOutputController@thanks', 'as'=>'thanks']);
}
