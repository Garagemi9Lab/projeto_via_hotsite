<?php



Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('/', 'HotSiteController@index')->name('index');
Route::get('/sobre', 'HotSiteController@sobre')->name('sobre');

Route::post('/cadastro', 'HotSiteController@cadastro')->name('cadastro');
Route::post('/leed', 'HotSiteController@leed')->name('leed');


Route::get('/erro', 'HotSiteController@erro')->name('erro');
