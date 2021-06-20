<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $fillable = ['transaksi_id', 'mobil_id','harga_sewa'
    // ,'tgl_sewa','tgl_akhir_sewa'
];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class,"transaksi_id","id");
    }

    public function mobil(){
        return $this->belongsTo(Mobil::class,"mobil_id","id");
    }
}
