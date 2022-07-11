@extends('template.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h3>Form Edit Jurusan</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/data/jurusan/'. $jurusan->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" value="{{ $jurusan->jurusan }}" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="jurusan" autofocus>
                        @error('jurusan')
                            <div class="invalid-feedback invalid-jurusan">
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