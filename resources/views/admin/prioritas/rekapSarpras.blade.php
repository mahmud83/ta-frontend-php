@extends('layouts.app')

@section('breadcrumbs')
  {{ Breadcrumbs::render('prioritasRekapSarpras') }}          
@endsection
@section('content')
  <iframe class="container-fluid"  style="position:absolute;" frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1cgRrxBFKx0Nz6_Mq6ID0nYTIn-zotroZ77qMoXXGg2E/edit?usp=sharing" ></iframe>
@endsection
