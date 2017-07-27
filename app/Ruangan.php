<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
  //koneksi ke database
  protected $table='ruangan'; //nama table
  protected $fillable=['id', 'id_card', 'nama_ruangan']; //field yang akan digunakan
}
