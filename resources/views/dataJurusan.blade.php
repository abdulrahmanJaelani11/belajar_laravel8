@extends('template.main')

@section('content')
    <h2>{{ $judul }}</h2>
    @if(session()->has('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif
        
    <a href="{{ url('/data/jurusan/create') }}" class="btn btn-sm btn-primary my-3">Tambah Jurusan</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jurusan</th>
                    <th width="300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                    @foreach ($jurusan as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ url('/data/jurusan/' . $row->id .'/edit') }}" class="btn btn-info btn-block btn-sm">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ url('/data/jurusan/' . $row->id . '/edit') }}" class="btn btn-primary btn-block btn-sm">Detail</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ url('/data/jurusan/' . $row->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger btn-block" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection