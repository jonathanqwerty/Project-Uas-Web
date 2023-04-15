<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function list()
    {
        $mahasiswa = Mahasiswa::all();
        // dd($mahasiswa);
        return view('mahasiswa.list',compact(['mahasiswa']));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Mahasiswa::create($request->except(['_token','submit']));
        return redirect('/mahasiswa/list');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        // dd($mahasiswa);
        return view('mahasiswa.edit', compact(['mahasiswa']));
    }

    public function update($id, Request $request
    )
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/mahasiswa/list');
    }
}
