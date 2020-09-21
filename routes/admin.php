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

        Route::get('/','RoleController@index')->name('browserRole');
        Route::get('/create','RoleController@create')->name('role.create');
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
        Route::get('/','CompanyUserController@index')->name('company.index');
        Route::get('/show/{id}','CompanyUserController@show')->name('show.company_user');
        Route::get('/edit/{id}','CompanyUserController@edit')->name('edit.company_user');
        Route::post('/update/{id}','CompanyUserController@update')->name('update.company_user');

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

});
Route::get('/test');
