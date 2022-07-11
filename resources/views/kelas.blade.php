{{-- @dd($siswa) --}}
@extends('template.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>
    <ul>
        @foreach ($kelas as $row)
            <li>{{ $row->siswa }}</li>
        @endforeach
    </ul>

@endsection