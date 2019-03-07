<?php
   
Route::get('/', function () {
    return redirect('home');
});

// Auth::routes();

// Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');
// Route::get('/login','SiteController@login');
// Route::get('/register','Auth\RegisterController@index')->name('register');
// Route::get('/login','Auth\LoginController@index')->name('login');
Route::get('/proses-register','Auth\RegisterController@create')->name('proses-register');
Route::get('/forgot-password','SiteController@forgotPassword');
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

// prioritas
Route::get('/prioritas','PrioritasController@index');
Route::get('/prioritas/spp', 'PrioritasController@spp');
Route::get('/prioritas/rekap-smk-pengampu', 'PrioritasController@rekapSmkPengampu');
Route::get('/prioritas/rekap-seragam', 'PrioritasController@rekapSeragam');
Route::get('/prioritas/rekap-sarpras', 'PrioritasController@rekapSarpras');
Route::get('/prioritas/kepengasuhan', 'PrioritasController@kepengasuhan');
Route::get('/prioritas/honor-non-pns', 'PrioritasController@honorNonPnstksdsmp');
Route::get('/prioritas/honor-Kepala-guru', 'PrioritasController@honorKepalaGuruTkPaudNonPns');
Route::get('/prioritas/honor-gtt-ptt', 'PrioritasController@honorGttPtt');
Route::get('/prioritas/bosda-madin-dan-bop', 'PrioritasController@bosdaMadinDanBop');

// rekap
Route::get('/rekap','RekapController@index');
Route::get('/rekap/kabupaten','RekapController@kabupaten');
Route::get('/rekap/madiun','RekapController@madiun');
Route::get('/rekap/bojonegoro','RekapController@bojonegoro');
Route::get('/rekap/malang','RekapController@malang');
Route::get('/rekap/pamekasan','RekapController@pamekasan');
Route::get('/rekap/jember','RekapController@jember');
Auth::routes();

// Route::get('/home','SiteController@index')->name('home');;

Route::get('/home', 'HomeController@index')->name('home');
