<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = [
        'name', 'harga', 'merk', 'tahun','transmisi','kapasitas', 'status', 'image','deskripsi','no_kendaraan'
    ];
}
