<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Auth::routes(['register'=>false]);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        // Dashboard

        Route::group(['prefix' => 'adminpanle','namespace'=>'Admin', 'middleware'=> 'auth'], function () {

            Route::get('/', 'DashboardController@index')->name('admin.index');
            Route::resource('museum', 'MuseumController');
            Route::resource('civilization', 'CivilizationController')->except(['show']);
            Route::resource('antique', 'AntiqueController')->except(['show']);
            Route::resource('hotel', 'HotelController')->except(['show']);

        });


        // FrontEnd
        Route::get('/', 'HomeController@index');
        Route::get('museums', 'HomeController@all_museums')->name('museums');
        Route::get('museum/{id}', 'HomeController@museum_details')->name('museum_details');
        Route::get('antique/{id}', 'HomeController@antique_details')->name('antique_details');

        Route::get('civilizations', 'HomeController@all_civilizations')->name('civilizations');
        Route::get('gove', 'HomeController@all_gove')->name('gove');
        Route::get('gove_museums/{id}', 'HomeController@gove_museums')->name('gove_museums');



});





