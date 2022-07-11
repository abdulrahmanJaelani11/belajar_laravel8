@extends('template.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    @foreach ($siswa as $row)
        <li>{{ $row->nama }}</li>
    @endforeach
@endsection