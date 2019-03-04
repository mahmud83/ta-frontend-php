<?php
Auth::routes();

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');
    
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');
Route::get('/login','SiteController@login');
Route::get('/register','SiteController@register');
Route::get('/forgot-password','SiteController@forgotPassword');
Route::get('/home','SiteController@index');
Route::get('/dak','DakController@index');
Route::get('/dak/sma','DakController@sma');
Route::get('/dak/smk','DakController@smk');
Route::get('/dak/pkplk','DakController@pkplk');

Route::get('/bos','BosController@index');
Route::get('/bos/bl','BosController@bl');
Route::get('/bos/btl','BosController@btl');

Route::get('/apbd','ApbdController@index');
Route::get('/apbdbl/sma','ApbdBlController@sma');
Route::get('/apbdbl/smk','ApbdBlController@smk');
Route::get('/apbdbl/pkplk','ApbdBlController@pkplk');
Route::get('/apbdbl/gtk','ApbdBlController@gtk');

Route::get('/apbdbtl/hibah','ApbdBtlController@hibah');
Route::get('/apbdbtl/bkk','ApbdBtlController@bkk');

Route::get('/prioritas','PrioritasController@index');
Route::get('/filter','FilterController@index');
