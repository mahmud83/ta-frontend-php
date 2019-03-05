<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrioritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         return view('admin.prioritas.index');
    }

    public function spp(){
        return view('admin.prioritas.spp');
    }
    public function rekapSmkPengampu(){
        return view('admin.prioritas.rekapSmkPengampu');
    }
    public function rekapSeragam(){
        return view('admin.prioritas.rekapSeragam');
    }
    public function rekapSarpras(){
        return view('admin.prioritas.rekapSarpras');
    }
    public function kepengasuhan(){
        return view('admin.prioritas.kepengasuhan');
    }
    public function honorNonPnstksdsmp(){
        return view('admin.prioritas.honorNonPnstksdsmp');
    }
    public function honorKepalaGuruTkPaudNonPns(){
        return view('admin.prioritas.honorKepalaGuruTkPaudNonPns');
    }
    public function honorGttPtt(){
        return view('admin.prioritas.honorGttPtt');
    }
    public function bosdaMadinDanBop(){
        return view('admin.prioritas.bosdaMadinDanBop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
