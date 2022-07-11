@extends('template.auth')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-lg-7">
        <div class="card shadow">
            <div class="card-body"> 
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" action="{{ url('daftar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name" placeholder="name">
                            @error('name')
                            <div class="invalid-feedback invalid-name">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
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
                            <button class="btn btn-user btn-block btn-primary" type="submit">Daftar</button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <small>Sudah Punya Akun? </small><a class="small" href="{{ url('login') }}">Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection