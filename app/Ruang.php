<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';
    protected $fillable = ['id', 'nama_ruang', 'alamat_ruang', 'deskripsi', 'kuota'];
}
