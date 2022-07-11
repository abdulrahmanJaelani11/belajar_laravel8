<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'title' => "Daftar"
        ]);
    }

    public function prosesDaftar()
    {
        $dataUser = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $dataUser['password'] = bcrypt($dataUser['password']);

        User::create($dataUser);

        request()->session()->flash('sukses', 'Berhasil Mendaftar');

        return redirect(url('login'));
    }

    public function login()
    {
        return view('login', [
            'title' => "Login"
        ]);
    }

    public function prosesLogin()
    {
        $dataUser = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($dataUser)) {
            request()->session()->regenerate($dataUser);
            return redirect()->intended('/');
        }

        return back()->with('loginGagal', 'Login Gagal!!');
    }

    public function prosesLogout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('login');
    }
}
