<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda()
    {
        return view('userIndex');
    }

    public function listMatakuliah()
    {
        return view('user.listMatakuliah');
    }
}
