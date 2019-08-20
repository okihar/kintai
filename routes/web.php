<?php


Route::get('/push','PushController@index')->middleware('auth');
Route::get('/status','StatusController@index')->middleware('auth');
//Route::post('/status','StatusController@create')->middleware('auth');
Route::get('/status/add','StatusController@add')->middleware('auth');
Route::post('/status/add','StatusController@create')->middleware('auth');
Route::get('/status/update','StatusController@index')->middleware('auth');
Route::post('/status/update','StatusController@update')->middleware('auth');
Route::get('/status/kakunin','StatusController@kakunin')->middleware('auth');
Route::post('/status/kakunin','StatusController@kakunin')->middleware('auth');

Route::get('/admin','AdminController@adminMenu')->middleware('auth');
Route::post('/admin','AdminController@adminMenu')->middleware('auth');
Route::get('/admin/today','AdminController@getTodayStatus')->middleware('auth');
Route::post('/admin/today','AdminController@getTodayStatus')->middleware('auth');
Route::get('/admin/history','AdminController@getHistory')->middleware('auth');
Route::post('/admin/history','AdminController@selectHistory')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
