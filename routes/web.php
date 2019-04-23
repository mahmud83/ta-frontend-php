<?php
   
// Route::get('/', function () {
//     return redirect('home');
//     // echo "hello";
// });


Route::get('/', 'HomeController@index');
Route::get('/login', ['as' => 'login', 'uses' => 'SiteController@login']);

// trafic
Route::get('/traffic/all',['as' => 'all', 'uses' => 'TrafficController@all']);
Route::get('/traffic/dns',['as' => 'dns', 'uses' => 'TrafficController@dns']);

// report
Route::get('/report/all',['as' => 'all', 'uses' => 'ReportController@all']);
Route::get('/report/dns',['as' => 'dns', 'uses' => 'ReportController@dns']);
Route::get('/report/test',['as' => 'test', 'uses' => 'ReportController@test']);
Route::get('/report/statistic',['as' => 'statistic', 'uses' => 'ReportController@statistic']);

Route::get('/proses-register','Auth\RegisterController@create')->name('proses-register');
Route::get('/forgot-password','SiteController@forgotPassword');



// Auth::routes();

// Route::get('/home','SiteController@index')->name('home');;

// Route::get('/home', 'HomeController@index')->name('home');