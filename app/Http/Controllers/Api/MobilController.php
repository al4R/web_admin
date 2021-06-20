<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mobil;

class MobilController extends Controller
{
    public function index(Request $request){
        // dd($request->all());die();
        $mobil = Mobil::all();
        if(!empty($mobil))
        { 
            return response()->json([
             'success' => 1,
             'message' => 'berhasil',
             'mobil'   => $mobil
         ]);
         }else{
             return $this->error('gagal');
         }
    }
    public function show($id){
        // dd($request->all());die();
        $mobil = Mobil::find($id);
        if(!empty($mobil))
        { 
            return response()->json([
             'success' => 1,
             'message' => 'berhasil',
             'mobil'   => $mobil
         ]);
         }else{
             return $this->error('gagal');
         }
    }

    public function update(Request $request,$id){
        $mobil = Mobil::find($id);

        $mobil->status = $request->input('status');

        $mobil->save();
       if(!empty($mobil))
       { 
           return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'update'    => $mobil
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
