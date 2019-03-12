@extends('layouts.app')

@section('breadcrumbs')
  {{ Breadcrumbs::render('prioritasRekapSeragam') }}          
@endsection
@section('content')
  <iframe class="container-fluid" style="position:absolute;" frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1mWtG46lYaAo3DDUALVb4KqMVHFR_QQcYqHGNhkPKhR0/edit?usp=sharing" ></iframe>
@endsection
