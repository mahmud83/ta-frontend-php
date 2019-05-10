<?php
   
// Route::get('/', function () {
//     return redirect('home');
//     // echo "hello";
// });


Route::get('/', 'HomeController@index');
Route::get('/login', ['as' => 'login', 'uses' => 'SiteController@login']);
Route::get('/welcome', ['as' => 'welcome', 'uses' => 'SiteController@welcome']);


// trafic
Route::get('/traffic/all',['as' => 'all', 'uses' => 'TrafficController@all']);
Route::get('/traffic/dns',['as' => 'dns', 'uses' => 'TrafficController@dns']);

// report
Route::get('/report/all',['as' => 'all', 'uses' => 'ReportController@all']);
Route::get('/report/tables',['as' => 'tables', 'uses' => 'ReportController@tables']);
Route::get('/report/statistic',['as' => 'statistic', 'uses' => 'ReportController@statistic']);
Route::get('/report/res-tables',['as' => 'resTables', 'uses' => 'ReportController@resTables']);
Route::get('/report/res-statistic',['as' => 'resStatistic', 'uses' => 'ReportController@resStatistic']);
Route::get('/report/test',['as' => 'test', 'uses' => 'ReportController@test']);

Route::get('/proses-register','Auth\RegisterController@create')->name('proses-register');
Route::get('/forgot-password','SiteController@forgotPassword');



// Auth::routes();

// Route::get('/home','SiteController@index')->name('home');;

// Route::get('/home', 'HomeController@index')->name('home');