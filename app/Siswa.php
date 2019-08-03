<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // protected $guarded=[];
    protected $table='siswa';
    public $timestamps=false;
    protected $primary='id';
}
