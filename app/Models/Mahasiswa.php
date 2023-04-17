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
    protected $table = 'mahasiswa';
    protected $guarded = [];

    protected static function boot()
    
    {
        parent::boot();
    
        static::creating(function($model) 
        {
            if($model->getKey() == null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }
}
