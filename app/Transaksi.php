<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable= [
        'user_id', 'kode_tran', 'tgl_order', 'total_harga','status_tr','cancel','transfer','bukti_tf', 'expired_at','tgl_sewa','tgl_akhir_sewa','lama_sewa'
    ];

    public function details(){
        return $this->belongsTo(DetailTransaksi::class,"id","transaksi_id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
