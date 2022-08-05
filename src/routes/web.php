<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// TOP
Route::get('/', 'TopController@index');
// ログインページ
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
// 予約ページ
Route::get('/reservation', 'ReservationController@index');
// 予約確定
Route::post('/reservation/done/', 'ReservationController@done');
// 予約キャンセル
Route::post('/reservation/cancel/', 'ReservationController@cancel');
// 部屋紹介ページ
Route::get('/room', 'RoomController@index');
// 会員登録ページ
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@regist');

// 退会ページ
Route::get('/register/delete', 'registerController@delete');