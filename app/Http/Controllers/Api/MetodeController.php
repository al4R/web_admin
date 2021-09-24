<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pembayaran;

class MetodeController extends Controller
{
    public function index(Request $request){
        // dd($request->all());die();
        // with(['merk'])->with(['seri'])->
        $metode = Pembayaran::get();
        if(!empty($metode))
        { 
            return response()->json([
             'success' => 1,
             'message' => 'berhasil',
             'metode'   => $metode
         ]);
         }else{
             return $this->error('gagal');
         }
    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
