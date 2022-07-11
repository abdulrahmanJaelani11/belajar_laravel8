@extends('template.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>
    <ul>
            <li>{{ $siswa->nama }}</li>
            <li><a href="{{ url('kelas/' . $siswa->kelas->kelas) }}">{{ $siswa->kelas->kelas }}</a></li>
            <li><a href="{{ url('jurusan/' . $siswa->jurusan->jurusan) }}">{{ $siswa->jurusan->jurusan }}</a></li>
    </ul>

@endsection