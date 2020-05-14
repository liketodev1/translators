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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {


    // ----------------------------------
    //  Admin Routes
    // ----------------------------------
    Route::middleware(['admin'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

        Route::get('/', 'AdminController@index')->name('home');

        Route::resources(
            array(
                'users' => 'UsersController',
                'options' => 'OptionsController',
                'terms' => 'TermsController',
                'privacy_policy' => 'PrivacyPolicyController',
            )
        );

    });

    // ----------------------------------
    //  Translator Routes
    // ----------------------------------
    Route::middleware(['translators'])->namespace('Translators')->group(function () {
        Route::get('/profile', 'TranslatorsController@index')->name('translator_profile');
        Route::post('/profile', 'TranslatorsController@profile')->name('save_translator_profile');
    });

});
Route::get('users/{user}/confirm', 'Auth\RegisterController@confirmCode')->name('confirmCode');
Route::post('users/{user}/confirm', 'Auth\RegisterController@confirm')->name('confirm');

Route::get('/about', 'PagesController@aboutUs')->name('about_us');
Route::get('/how-it-works', 'PagesController@howItWorks')->name('how_it_works');
Route::get('/terms', 'PagesController@terms')->name('terms');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy_policy');

