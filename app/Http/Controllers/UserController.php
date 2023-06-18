<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function listMatakuliah()
    {
        return view('listMatakuliah');
    }

    public function absen($NIM)
    {

        $NIM = auth()->user()->NIM;
        // return $NIM;
        $currentTime = Carbon::now();
        DB::insert('insert into _tabsen (NIM, jam) values (?,?)', array($NIM, $currentTime) );
        $result = DB::select('select * from _t_kehadiran where NIM = ? AND tanggal =?',array($NIM,today()));
        
        if ($result) {
            DB::update('update _t_kehadiran set jam_keluar = now() where NIM = ? and id = ?', array($NIM,$result[0]->id));
        } 
        else {
            DB::insert('insert into _t_kehadiran (NIM, tanggal, jam_masuk, jam_keluar, matkul_ID, kelas_ID) values (?,?,now(),?,?,?)', array($NIM, today(), null,1,1 ) );
        }  

        return redirect('user/listAbsen');
    }

    public function absenMahasiswa()
    {
        return view('user/absen');
    }

    public function list()
    {
        $_tabsen = Absen::all();
        // dd($_tabsen);
        
        return view('user.absen',compact(['_tabsen']));
    }

    public function listAbsen()
    {
        $_tabsen = Absen::all();
        // dd($_tabsen);
        
        return view('user.listAbsen',compact(['_tabsen']));
    }
}
