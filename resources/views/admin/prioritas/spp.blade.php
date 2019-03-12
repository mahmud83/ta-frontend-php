@extends('layouts.app')

@section('breadcrumbs')
  {{ Breadcrumbs::render('prioritasSpp') }}          
@endsection
@section('content')
  <iframe class="container-fluid" style="position:absolute;" frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1g_F5xt1a3NtnslLFYFDm6vsAEE_xw6h-kR--v6gi4v0/edit?usp=sharing" ></iframe>
@endsection
