<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    //
    protected $table='table';
    protected $fillable=['nama','kelas','jurusan','jk'];
    protected $visible=['nama','kelas','jurusan','jk'];
    public $timestamps=true;
}
