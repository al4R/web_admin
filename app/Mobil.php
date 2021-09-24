<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = [
        'kapasitas','transmisi','tahun','model', 'harga', 'merk','image','deskripsi','no_kendaraan'
    ];

    // public function merk(){
    //     return $this->belongsTo(Merk::class,"merk_id","id");
    // }
    // public function seri(){
    //     return $this->belongsTo(Seri::class,"seri_id","id");
    // }
}
