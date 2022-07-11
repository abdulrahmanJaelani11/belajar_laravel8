@extends('template.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    @foreach ($siswa as $row)
        <li><a href="{{ url('detail/' . $row->id) }}"> {{ $row->nama }} </a></li>
    @endforeach
@endsection