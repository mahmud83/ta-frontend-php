<?php
   
// Route::get('/', function () {
//     return redirect('home');
//     // echo "hello";
// });

Route::get('/', 'HomeController@index');

// trafic
Route::get('/traffic/all',['as' => 'all', 'uses' => 'TrafficController@all']);
Route::get('/traffic/dns',['as' => 'dns', 'uses' => 'TrafficController@dns']);

// report
Route::get('/report/all',['as' => 'all', 'uses' => 'ReportController@all']);
Route::get('/report/dns',['as' => 'dns', 'uses' => 'ReportController@dns']);

Route::get('/proses-register','Auth\RegisterController@create')->name('proses-register');
Route::get('/forgot-password','SiteController@forgotPassword');

// DAK
Route::get('/dak',['as' => 'dak', 'uses' => 'DakController@index']);
Route::get('/dak/sma',['as' => 'daksma','uses'=>'DakController@sma']);
Route::get('/dak/smk',['as' => 'daksmk', 'uses' =>'DakController@smk']);
Route::get('/dak/pkplk',['as' => 'dakpkplk', 'uses' =>'DakController@pkplk']);


// Auth::routes();

// Route::get('/home','SiteController@index')->name('home');;

// Route::get('/home', 'HomeController@index')->name('home');