{{-- @dd($siswa) --}}
@extends('template.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>
    @if(session()->has('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
    @endif
    <a href="{{ url('main/siswa/create') }}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-fw fa-plus"></i> Tambah Siswa</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th width="300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                    @foreach ($siswa as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ url('/main/siswa/' . $row->id .'/edit') }}" class="btn btn-info btn-block btn-sm">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ url('/main/siswa/' . $row->id) }}" class="btn btn-primary btn-block btn-sm">Detail</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ url('main/siswa/' . $row->id) }}" method="POST">
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