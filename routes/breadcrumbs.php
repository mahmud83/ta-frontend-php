<?php

// DAK
Breadcrumbs::for('DAK', function ($breadcrumbs) {
    $breadcrumbs->push('DAK', route('dak'));
});

Breadcrumbs::register('SMA', function ($breadcrumbs) {
     $breadcrumbs->parent('DAK');
     $breadcrumbs->push('SMA', route('daksma'));
});
Breadcrumbs::register('SMK', function ($breadcrumbs) {
     $breadcrumbs->parent('DAK');
     $breadcrumbs->push('SMK', route('daksmk'));
});
Breadcrumbs::register('PKPLK', function ($breadcrumbs) {
     $breadcrumbs->parent('DAK');
     $breadcrumbs->push('PKPLK', route('dakpkplk'));
});

// BOS
Breadcrumbs::for('BOS', function ($breadcrumbs) {
    $breadcrumbs->push('BOS', route('bos'));
});
Breadcrumbs::register('BL', function ($breadcrumbs) {
     $breadcrumbs->parent('BOS');
     $breadcrumbs->push('Belanja Langsung', route('bosbl'));
});
Breadcrumbs::register('BTL', function ($breadcrumbs) {
     $breadcrumbs->parent('BOS');
     $breadcrumbs->push('Belanja Tidak Langsung', route('bosbtl'));
});

// APBD
Breadcrumbs::for('APBD', function ($breadcrumbs) {
    $breadcrumbs->push('APBD', route('apbd'));
});
Breadcrumbs::for('APBDBL', function ($breadcrumbs) {
     $breadcrumbs->parent('APBD');
    $breadcrumbs->push('Belanja Langsung', route('apbdbl'));
});
Breadcrumbs::register('apbdBlSma', function ($breadcrumbs) {
     $breadcrumbs->parent('APBDBL');
     $breadcrumbs->push('SMA', route('apbdBlSma'));
});

Breadcrumbs::register('apbdBlSmk', function($breadcrumbs){
    $breadcrumbs->parent('APBDBL');
    $breadcrumbs->push('SMK', route('apbdBlSmk'));
});
Breadcrumbs::register('apbdBlPkplk', function($breadcrumbs){
    $breadcrumbs->parent('APBDBL');
    $breadcrumbs->push('PKPLK', route('apbdBlPkplk'));
});
Breadcrumbs::register('apbdBlGtk', function($breadcrumbs){
    $breadcrumbs->parent('APBDBL');
    $breadcrumbs->push('GTK', route('apbdBlGtk'));
});

Breadcrumbs::for('APBDBTL', function ($breadcrumbs) {
     $breadcrumbs->parent('APBD');
    $breadcrumbs->push('Belanja Tidak Langsung', route('apbdbtl'));
});
Breadcrumbs::register('apbdBtlHibah', function($breadcrumbs){
    $breadcrumbs->parent('APBDBTL');
    $breadcrumbs->push('Hibah', route('apbdBtlHibah'));
});
Breadcrumbs::register('apbdBtlBkk', function($breadcrumbs){
    $breadcrumbs->parent('APBDBTL');
    $breadcrumbs->push('BKK', route('apbdBtlBkk'));
});


// prioritas
Breadcrumbs::for('prioritas', function ($breadcrumbs) {
    $breadcrumbs->push('Prioritas', route('prioritas'));
});
Breadcrumbs::register('prioritasSpp', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('SPP', route('prioritasSpp'));
});
Breadcrumbs::register('prioritasRekapSmkPengampu', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('SMK Pengampu', route('prioritasRekapSmkPengampu'));
});
Breadcrumbs::register('prioritasRekapSeragam', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Seragam', route('prioritasRekapSeragam'));
});
Breadcrumbs::register('prioritasRekapSarpras', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('SARPRAS', route('prioritasRekapSarpras'));
});
Breadcrumbs::register('prioritasKepengasuhan', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Kepengasuhan', route('prioritasKepengasuhan'));
});
Breadcrumbs::register('prioritasHonorNonPnstksdsmp', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Honor Non PNS TK SD SMP', route('prioritasHonorNonPnstksdsmp'));
});
Breadcrumbs::register('prioritasHonorKepalaGuruTkPaudNonPns', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Honor Kepala Guru TK/PAUD non-PNS', route('prioritasHonorKepalaGuruTkPaudNonPns'));
});
Breadcrumbs::register('prioritasHonorGttPtt', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Honor GTT/PTT', route('prioritasHonorGttPtt'));
});
Breadcrumbs::register('prioritasBosdaMadinDanBop', function($breadcrumbs){
    $breadcrumbs->parent('prioritas');
    $breadcrumbs->push('Bosda MADIN dan BOP', route('prioritasBosdaMadinDanBop'));
});


// rekap
Breadcrumbs::for('rekap', function ($breadcrumbs) {
    $breadcrumbs->push('Rekap Anggaran', route('kabupaten'));
});

Breadcrumbs::register('kabupaten', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Rekap Anggaran', route('kabupaten'));
});
Breadcrumbs::register('madiun', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Bakorwil Madiun', route('madiun'));
});
Breadcrumbs::register('bojonegoro', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Bakorwil Bojonegoro', route('bojonegoro'));
});
Breadcrumbs::register('malang', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Bakorwil Malang', route('malang'));
});
Breadcrumbs::register('pamekasan', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Bakorwil Pamekasan', route('pamekasan'));
});
Breadcrumbs::register('jember', function($breadcrumbs){
    $breadcrumbs->parent('rekap');
    $breadcrumbs->push('Bakorwil Jember', route('jember'));
});