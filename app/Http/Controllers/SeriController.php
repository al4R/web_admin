<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seri;

class SeriController extends Controller
{
    public function index()
    {
        $seri['listSeri'] = Seri::all();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'   => $seri
        ]);
    }
    public function create(Request $request)
    {
        $seri = new Seri();
        $seri->model = $request->input('model');
        $seri->tahun = $request->input('tahun');
        $seri->transmisi = $request->input('transmisi');
        $seri->kapasitas = $request->input('kapasitas');
        $seri->save();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'   => $seri
        ]);
    }

    public function update(Request $request,$id)
    {
        $seri = Seri::find($id);
        $seri->model = $request->input('model');
        $seri->tahun = $request->input('tahun');
        $seri->transmisi = $request->input('transmisi');
        $seri->kapasitas = $request->input('kapasitas');
        $seri->save();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'   => $seri
        ]);
    }

    public function destroy($id)
    {
        $seri = Seri::find($id);
        $seri->delete();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'mobil'   => $seri
        ]);
    }

}
