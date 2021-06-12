<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Transaksi;
use App\DetailTransaksi;

class TransaksiController extends Controller
{
    public function store(Request $request){
        $validasi = Validator::make($request->all(), [
        'user_id' => 'required',
        'total_harga' =>  'required',
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }
        
        $kode_tran = "KD/TRN-".now()->format('ymd')."/".rand(100,999);
        $tgl_order = now();
        $expired_at = now()->addDay();
    
        $dataTransaksi = array_merge($request->all(),[
            'kode_tran' => $kode_tran,
            'expired_at' => $expired_at,
            'tgl_order' => $tgl_order 
        ]);

        \DB::beginTransaction();
        $transaksi = Transaksi::create($dataTransaksi);
        foreach ($request->mobils as $mobil){
            $detail = [
                'transaksi_id' => $transaksi->id,
                'mobil_id' => $mobil['id'],
                'harga_sewa' => $mobil['harga_sewa']
                //
            ];
            $detailTransaksi = DetailTransaksi::create($detail);
        }
        if(!empty($transaksi) && !empty($detailTransaksi)){
            \DB::commit();
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil',
                'transaksi' => collect($transaksi)
            ]);
        }else{
            \DB::rollback();
            $this->error('gagal');
        }
    }   
    
    public function history($id){
        $transaksis = Transaksi::where('cancel','=',false)->where('status_tr','=',true)->with(['user'])->whereHas('user',function ($query) use ($id){
            $query->whereId($id);
        })->get();
        foreach ($transaksis as $transaksi){
            $transaksi->details;
            foreach ($transaksis as $transaksi){
                $transaksi->details->mobil;
            }
        }

        if(!empty($transaksis) ){
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil',
                'transaksi' => collect($transaksis)
            ]);
        }else{
            $this->error('gagal');
        }

    }
    public function berjalan($id){
        $transaksis = Transaksi::where('cancel','=',false)->where('status_tr','=',false)->with(['user'])->whereHas('user',function ($query) use ($id){
            $query->whereId($id);
        })->get();
        foreach ($transaksis as $transaksi){
            $transaksi->details;
            foreach ($transaksis as $transaksi){
                $transaksi->details->mobil;
            }
        }

        if(!empty($transaksis) ){
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil',
                'transaksi' => collect($transaksis)
            ]);
        }else{
            $this->error('gagal');
        }

    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
