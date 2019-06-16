<?php



Auth::routes();

Route::get('/home', 'HotSiteController@index')->name('home');
Route::get('/', 'HotSiteController@index')->name('index');
Route::get('/sobre', 'HotSiteController@sobre')->name('sobre');

Route::post('/cadastro', 'HotSiteController@cadastro')->name('cadastro');
Route::post('/lead', 'HotSiteController@lead')->name('leed');


Route::get('/erro', 'HotSiteController@erro')->name('erro');
