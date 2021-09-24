<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil['listMobil'] = Mobil::all();
        return view('mobil')->with($mobil);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $mobil = new Mobil();
       $mobil->model = $request->input('model');
       $mobil->harga = $request->input('harga');
    //    $mobil->merk_id = $request->input('merk_id');
    //    $mobil->seri_id = $request->input('seri_id');
       $mobil->merk = $request->input('merk');
       $mobil->tahun = $request->input('tahun');
       $mobil->transmisi = $request->input('transmisi');
       $mobil->kapasitas = $request->input('kapasitas');
       $mobil->no_kendaraan = $request->input('no_kendaraan');
       $mobil->deskripsi = $request->input('deskripsi');
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                $fileName = date('mYd').rand(1,10).'_'.$ext;
                $file->storeAs('public/mobil', $fileName);
                $mobil->image=$fileName;
            } else {
                return $request;
                $mobil->image = '';
            }
            $mobil->save();

            return redirect('mobil');



        // $fileName = '';
        // if($request->image->getClientOriginalName()){
        //     $file = str_replace(' ', '', $request->image->getClientOriginalName());
        //     $fileName = date('mYdHs').rand(1,999).'_'.$file;
        //     $request->image->storeAs('public/mobil', $fileName);
        // }
        // $mobil = Mobil::create(array_merge($request->all(), [
        //     'image' => $fileName
        // ]));
        // return redirect('mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::find($id);
        return view('mobilupdate')->with('mobil',$mobil);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $mobil = Mobil::find($id);
        $mobil->model = $request->input('model');
       $mobil->harga = $request->input('harga');
    //    $mobil->merk_id = $request->input('merk_id');
    //    $mobil->seri_id = $request->input('seri_id');
       $mobil->merk = $request->input('merk');
       $mobil->tahun = $request->input('tahun');
       $mobil->transmisi = $request->input('transmisi');
       $mobil->kapasitas = $request->input('kapasitas');
       $mobil->no_kendaraan = $request->input('no_kendaraan');
       $mobil->deskripsi = $request->input('deskripsi');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $fileName = date('mYdHs').rand(1,999).'_'.$ext;
            $file->storeAs('public/mobil', $fileName);
            $mobil->image=$fileName;
        } else {
            $mobil->image = $mobil->image;
        }
        $mobil->save();
        return redirect('mobil');
    
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect('mobil');
    }
    
}
