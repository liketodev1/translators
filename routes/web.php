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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/{user}/confirm', 'Auth\RegisterController@confirmCode')->name('confirmCode');
Route::post('users/{user}/confirm', 'Auth\RegisterController@confirm')->name('confirm');

Route::get('/about', 'PagesController@aboutUs')->name('about_us');
Route::get('/how-it-works', 'PagesController@howItWorks')->name('how_it_works');
Route::get('/terms', 'PagesController@terms')->name('terms');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy_policy');

