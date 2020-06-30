<?php

use Illuminate\Support\Facades\Artisan;
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
    Route::middleware(['admin'])
        ->prefix('admin')
        ->namespace('Admin')
        ->name('admin.')->group(function () {

        Route::get('/', 'AdminController@index')->name('home');
        Route::resources(
            array(
                'users' => 'UsersController',
                'terms' => 'TermsController',
                'privacy_policy' => 'PrivacyPolicyController',
                'legal_areas' => 'LegalAreasController',
            )
        );

    });

    // ---------------------------------- //
    //           Lawyer Routes            //
    // ---------------------------------- //
    Route::middleware(['lawyer'])
        ->prefix('lawyer')
        ->namespace('Lawyer')
        ->group(function () {
        Route::get('/profile', 'LawyerController@index')->name('lawyer_profile');
        Route::post('/profile', 'LawyerController@profile')->name('save_lawyer_profile');
    });

    // ---------------------------------- //
    //           Client Routes            //
    // ---------------------------------- //
    Route::middleware(['client'])
        ->prefix('client')
        ->namespace('Client')
        ->group(function () {
        Route::get('/profile', 'ClientController@index')->name('client_profile');

        Route::resource('post','PostController');
    });

});
Route::get('users/{user}/confirm', 'Auth\RegisterController@confirmCode')->name('confirmCode');
Route::post('users/{user}/confirm', 'Auth\RegisterController@confirm')->name('confirm');

Route::get('/about', 'PagesController@aboutUs')->name('about_us');
Route::get('/how-it-works', 'PagesController@howItWorks')->name('how_it_works');
Route::get('/terms', 'PagesController@terms')->name('terms');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy_policy');

Route::get('find-a-job','PagesController@findAJob')->name('find_a_job');
Route::get('our-lawyers','PagesController@ourLawyers')->name('our_lawyers');

Route::get('/clear-cache', function() {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   Artisan::call('config:clear');
   Artisan::call('view:clear');
   Artisan::call('optimize:clear');

    return "Cache is cleared";
});
