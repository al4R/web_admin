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
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'    => $mobil
        ]);
    }
    public function show($id){
        // dd($request->all());die();
        $mobil = Mobil::find($id);
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'    => $mobil
        ]);
    }

    public function update(Request $request,$id){
        $mobil = Mobil::find($id);

        $mobil->status = $request->input('status');

        $mobil->save();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'    => $mobil
        ]);
    }
    

}
