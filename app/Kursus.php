<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    //koneksi ke database
    protected $table='kursus'; //nama table
    protected $fillable=['id', 'nama_kursus', 'biaya']; //field yang aka digunakan
}
