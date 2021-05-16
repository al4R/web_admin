<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable= [
        'user_id', 'kode_tran', 'tgl_order','statusByr', 'total_harga','statusTr',
        'bukti_tf', 'expired_at'
    ];

    public function details(){
        return $this->belongsTo(DetailTransaksi::class,"id","transaksi_id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
