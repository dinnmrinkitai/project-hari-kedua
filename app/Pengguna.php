<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
    protected $table='pengguna';
    protected $fillable=['nama_lengkap','alamat','nomer_telepon'];
    protected $visible=['nama_lengkap','alamat','nomer_telepon'];
    public $timestamps=true;
}
