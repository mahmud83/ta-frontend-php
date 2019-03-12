<?php
   
Route::get('/', function () {
    return redirect('home');
});

Route::get('/proses-register','Auth\RegisterController@create')->name('proses-register');
Route::get('/forgot-password','SiteController@forgotPassword');

// DAK
Route::get('/dak',['as' => 'dak', 'uses' => 'DakController@index']);
Route::get('/dak/sma',['as' => 'daksma','uses'=>'DakController@sma']);
Route::get('/dak/smk',['as' => 'daksmk', 'uses' =>'DakController@smk']);
Route::get('/dak/pkplk',['as' => 'dakpkplk', 'uses' =>'DakController@pkplk']);

// BOS
Route::get('/bos',['as' => 'bos', 'uses' => 'BosController@index']);
Route::get('/bos/bl',['as' => 'bosbl', 'uses' => 'BosController@bl']);
Route::get('/bos/btl',['as' => 'bosbtl', 'uses' => 'BosController@btl']);

// APBD
Route::get('/apbd',['as' => 'apbd', 'uses' => 'ApbdController@index']);
Route::get('/apbdbl',['as' => 'apbdbl', 'uses' => 'ApbdBlController@index']);
Route::get('/apbdbl/sma',['as' => 'apbdBlSma', 'uses' => 'ApbdBlController@sma']);
Route::get('/apbdbl/smk',['as' => 'apbdBlSmk', 'uses' => 'ApbdBlController@smk']);
Route::get('/apbdbl/pkplk',['as' => 'apbdBlPkplk', 'uses' => 'ApbdBlController@pkplk']);
Route::get('/apbdbl/gtk',['as' => 'apbdBlGtk', 'uses' => 'ApbdBlController@gtk']);

Route::get('/apbdbtl',['as' => 'apbdbtl', 'uses' => 'ApbdBtlController@index']);
Route::get('/apbdbtl/hibah',['as' => 'apbdBtlHibah', 'uses' => 'ApbdBtlController@hibah']);
Route::get('/apbdbtl/bkk',['as' => 'apbdBtlBkk', 'uses' => 'ApbdBtlController@bkk']);

// prioritas
Route::get('/prioritas',['as' => 'prioritas', 'uses' => 'PrioritasController@index']);
Route::get('/prioritas/spp', ['as' => 'prioritasSpp', 'uses' =>'PrioritasController@spp']);
Route::get('/prioritas/rekap-smk-pengampu', ['as' => 'prioritasRekapSmkPengampu', 'uses' =>'PrioritasController@rekapSmkPengampu']);
Route::get('/prioritas/rekap-seragam', ['as' => 'prioritasRekapSeragam', 'uses' =>'PrioritasController@rekapSeragam']);
Route::get('/prioritas/rekap-sarpras', ['as' => 'prioritasRekapSarpras', 'uses' =>'PrioritasController@rekapSarpras']);
Route::get('/prioritas/kepengasuhan', ['as' => 'prioritasKepengasuhan', 'uses' =>'PrioritasController@kepengasuhan']);
Route::get('/prioritas/honor-non-pns', ['as' => 'prioritasHonorNonPnstksdsmp', 'uses' =>'PrioritasController@honorNonPnstksdsmp']);
Route::get('/prioritas/honor-Kepala-guru', ['as' => 'prioritasHonorKepalaGuruTkPaudNonPns', 'uses' =>'PrioritasController@honorKepalaGuruTkPaudNonPns']);
Route::get('/prioritas/honor-gtt-ptt', ['as' => 'prioritasHonorGttPtt', 'uses' =>'PrioritasController@honorGttPtt']);
Route::get('/prioritas/bosda-madin-dan-bop', ['as' => 'prioritasBosdaMadinDanBop', 'uses' =>'PrioritasController@bosdaMadinDanBop']);

// rekap
Route::get('/rekap',['as' => 'rekap', 'uses' => 'RekapController@index']);
Route::get('/rekap/kabupaten',['as' => 'kabupaten', 'uses' => 'RekapController@kabupaten']);
Route::get('/rekap/madiun',['as' => 'madiun', 'uses' => 'RekapController@madiun']);
Route::get('/rekap/bojonegoro',['as' => 'bojonegoro', 'uses' => 'RekapController@bojonegoro']);
Route::get('/rekap/malang',['as' => 'malang', 'uses' => 'RekapController@malang']);
Route::get('/rekap/pamekasan',['as' => 'pamekasan', 'uses' => 'RekapController@pamekasan']);
Route::get('/rekap/jember',['as' => 'jember', 'uses' =>'RekapController@jember']);
Auth::routes();

// Route::get('/home','SiteController@index')->name('home');;

Route::get('/home', 'HomeController@index')->name('home');