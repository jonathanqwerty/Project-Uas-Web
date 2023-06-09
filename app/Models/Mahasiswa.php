<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class Mahasiswa extends Model
{

    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    protected $table = '_m__mahasiswa';
    protected $guarded = [];
}
