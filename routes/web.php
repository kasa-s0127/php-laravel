<?php

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

Route::group(['as' => 'form::'], function() {
    // 入力画面
    Route::get('/input', ['as' => 'input', 'uses' => 'FormController@input']);
    // 入力確認画面
    Route::match(['get', 'post'], '/confirm', ['as' => 'confirm', 'uses' => 'FormController@confirm']);
    // 完了画面
    Route::post('/complete', ['as' => 'complete', 'uses' => 'FormController@complete']);
});