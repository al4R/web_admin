<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable= [
        'user_id','mobil_id','kode_tran', 'tgl_order', 'total_harga','status_tr','cancel','transfer','bukti_tf', 'expired_at','tgl_sewa','tgl_akhir_sewa','lama_sewa'
    ];

    public static function count(){
        $cancel = Transaksi::where('cancel',0)->where('status_tr',0)->where(function($q){
            $q->where('status_bayar',1)->orWhere('status_bayar',3); 
        })->get();
        return $cancel->count();
    }

    public function mobil(){
        return $this->belongsTo(Mobil::class,"mobil_id","id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
