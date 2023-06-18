<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class MahasiswaController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function list()
    {
        $_m__mahasiswa = Mahasiswa::all();
        // dd($_m__mahasiswa);
        
        return view('mahasiswa.list',compact(['_m__mahasiswa']));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        
        //dd($request->all());
        $request->validate([
            'NIM' => ['required', 'string', 'max:8', 'unique:'.Mahasiswa::class],
        ]);
        
        $NIM_TEST = $request->NIM;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'NIM' => $NIM_TEST,
        ]);

        Mahasiswa::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect('/mahasiswa/list');
    }

    public function edit($id)
    {
        $_m__mahasiswa = Mahasiswa::find($id);
        // dd($mahasiswa);
        return view('mahasiswa.edit', compact(['_m__mahasiswa']));
    }

    public function update($id, Request $request)
    {
        $_m__mahasiswa = Mahasiswa::find($id);
        $_m__mahasiswa->update($request->except(['_token','submit']));
        return redirect('/mahasiswa/list');
    }

    public function userPage()
    {
        $_m__mahasiswa = Mahasiswa::all();
        // dd($mahasiswa);
        return view('mahasiswa.list',compact(['_m__mahasiswa']));
    }

}
