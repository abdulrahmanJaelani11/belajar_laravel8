@extends('template.auth')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        @if(session()->has('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        @if(session()->has('loginGagal'))
        <div class="alert alert-danger">
            {{ session('loginGagal') }}
        </div>
        @endif
        <div class="card shadow mt-4">
            <div class="card-body"> 
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h1 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form class="user" action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email"
                            placeholder="email@example.com">
                            @error('email')
                            <div class="invalid-feedback invalid-nama">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password"
                            placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback invalid-nama">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-user btn-block btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <small>Belum Punya akun? </small><a class="small" href="{{ url('daftar') }}">Daftar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection