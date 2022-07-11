@extends('template.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Form Tambah Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/main/siswa') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="name" placeholder="Nama">
                            @error('nama')
                                <div class="invalid-feedback invalid-nama">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas_id" id="kelas" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option value="">Pilih Kelas</option>
                                <?php foreach ( $kelas as $row ) : ?>
                                <option value="{{  $row->id }}">{{ $row->kelas }}</option>
                                <?php endforeach; ?>
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback invalid-name">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan_id" id="jurusan" class="form-control @error('jurusan_id') is-invalid @enderror">
                                <option value="">Pilih Jurusan</option>
                                <?php foreach ( $jurusan as $row ) : ?>
                                <option value="{{  $row->id }}">{{ $row->jurusan }}</option>
                                <?php endforeach; ?>
                            </select>
                            @error('jurusan_id')
                                <div class="invalid-feedback invalid-name">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection