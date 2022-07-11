@extends('template.main')

@section('content')
    <h4>Selamat Datang, {{ auth()->user()->name }}</h4>
@endsection