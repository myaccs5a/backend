<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route đăng nhập phía admin
Route::get('login-admin','Administrator\AuthAdminController@login')->name('login.admin');
Route::post('login','Administrator\AuthAdminController@postLogin')->name('postLogin');

Route::group(['prefix' => '/','namespace'=>'Administrator','middleware'=>'AdminCheckLogin'], function () {
    Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');

    Route::get('logout','AuthAdminController@logout')->name('logout.admin');


    Route::group(['prefix' => 'role'], function () {

        Route::get('/','RoleController@index')->name('index.role');
        Route::get('/create','RoleController@create')->name('create.role');
        Route::get('/edit/{id}','RoleController@edit')->name('edit.role');
        Route::post('/update/{id}','RoleController@update')->name('update.role');
        Route::post('/store','RoleController@store')->name('store.role');
        Route::post('/destroy-role/{id}','RoleController@destroyRole')->name('destroy.role');
    });
    //route for admin_user
    Route::group(['prefix' => 'account'], function () {
        //route show admin account
        Route::get('','AdminController@index')->name('browserAdmin');

        //route create admin account
        Route::get('/create','AdminController@create')->name('createAdmin');
        Route::get('/edit/{id}','AdminController@edit')->name('editAdmin');
        Route::get('/update','AdminController@update')->name('updateAdmin');

        Route::post('/store','AdminController@store')->name('storeAdmin');
        Route::post('/delete-user/{id}','AdminController@destroyAdmin')->name('destroy_admin');
    });
    Route::group(['prefix' => 'company'], function () {
        //route show company user
        Route::get('/','CompanyUserController@index')->name('index.company');
        Route::get('/show/{id}','CompanyUserController@show')->name('show.company');
        Route::get('/edit/{id}','CompanyUserController@edit')->name('edit.company');
        Route::post('/update/{id}','CompanyUserController@update')->name('update.company');

    });
    Route::group(['prefix' => 'user'], function () {
        //route show user
        Route::get('/','UserController@index')->name('browser.user');
        Route::get('/show/{id}','UserController@show')->name('show.user');
        Route::get('/edit/{id}','UserController@edit')->name('edit.user');
        Route::post('/update/{id}','UserController@updateStatus')->name('update.user');

    });

    Route::group(['prefix' => 'job'], function () {
        //route show job
        Route::get('/','JobController@index')->name('browser.job');
        Route::get('/show/{id}','JobController@show')->name('show.job');
        Route::get('/edit/{id}','JobController@edit')->name('edit.job');
        Route::post('/update/{id}','JobController@update')->name('update.job');
    });

    Route::group(['prefix' => 'setting'], function () {
        //route show setting
        Route::get('/','WebSettingController@index')->name('browser.web');
        Route::get('/show/{id}','WebSettingController@show')->name('show.web');
        Route::get('/edit/{id}','WebSettingController@edit')->name('edit.web');
        Route::post('/update/{id}','WebSettingController@update')->name('update.web');
    });
    Route::group(['prefix' => 'language'], function () {
        //route show language
        Route::get('/','LanguageController@getLanguage')->name('language-admin');
        Route::get('/add-language','LanguageController@addLanguage')->name('add-language');
        Route::post('/save-language','LanguageController@saveLanguage')->name('save-language');
        Route::get('/delete-language/{id}','LanguageController@getDeleteLanguage');
        Route::get('/edit-language/{id}','LanguageController@getEditLanguage');
        Route::post('/edit-language/{id}','LanguageController@postEditLanguage');

    });
    Route::group(['prefix' => 'job-category'], function () {
        //route show job-category
        Route::get('/','JobCategoryController@getJobCategory')->name('job-category');
        Route::get('/add-job-category','JobCategoryController@addJobCategory')->name('add-job-category');
        Route::post('/save-job-category','JobCategoryController@saveJobCategory')->name('save-job-category');
        Route::get('/delete-job-category/{id}','JobCategoryController@getDeleteJobCategory');
        Route::get('/edit-job-category/{id}','JobCategoryController@getEditJobCategory');
        Route::post('/edit-job-category/{id}','JobCategoryController@postEditJobCategory');
    });
    Route::group(['prefix' => 'payment'], function () {
        //route show payment
        Route::get('/','PaymentController@getPayment')->name('payment-admin');
        Route::get('/delete-payment/{id}','PaymentController@getDeletePayment');
    });
    Route::group(['prefix' => 'zones'], function () {
        //route show zones
        Route::get('/','ZonesController@getZones')->name('zones-admin');
        Route::get('/add-zones','ZonesController@addZones')->name('add-zones');
        Route::post('/save-zones','ZonesController@saveZones')->name('save-zones');
        Route::get('/delete-zones/{id}','ZonesController@getDeleteZones');
        Route::get('/edit-zones/{id}','ZonesController@getEditZones');
        Route::post('/edit-zones/{id}','ZonesController@postEditZones');
    });
    Route::group(['prefix' => 'contact'], function () {
        //route show zones
        Route::get('/','ContactController@index')->name('contact.index');
    });

});