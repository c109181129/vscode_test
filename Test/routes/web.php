<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@login');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@signUp');   
        Route::get('chooise', 'App\Http\Controllers\UserAuthController@chooise');
        Route::post('chooise-process', 'App\Http\Controllers\UserAuthController@chooiseProcess');
        Route::get('inherit', 'App\Http\Controllers\UserAuthController@inherit'); // 去掉空格
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@profile');
    });
});

Route::group(['prefix' => 'merchandise'], function () {
    Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
});