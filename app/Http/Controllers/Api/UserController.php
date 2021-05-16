<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request){
        // dd($request->all());die();
        $user = User::all();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'user'    => $user
        ]);
    }
    public function show(){
        // dd($request->all());die();
        $user = Auth::user();
        return response()->json([
            'success' => 1,
            'message' => 'berhasil',
            'user'    => $user
        ]);
    }
    
    public function login(Request $requset){
        // dd($requset->all());die();
        $user = User::where('email', $requset->email)->first();

        if($user){
            if(password_verify($requset->password, $user->password)){
                return response()->json([
                    'success' => 1,
                    'message' => 'Selamat datang '.$user->name,
                    'user' => $user
                ]);
            }
            return $this->error('Password Salah');
        }
        return $this->error('Email tidak terdaftar');
    }

    public function register(Request $request){
        $validasi = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|unique:users',
        'telepon' => 'required|unique:users',
        'nik' => 'required|unique:users',
        'password' => 'required|min:8',
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $user = User::create(array_merge($request->all(),[
            'password' => bcrypt($request->password)
        ]));

        if($user){
            return response()->json([
                'success' => 1,
                'message' => 'Selamat datang '.$user->name,
                'user'    => $user
            ]);            
        }

        return $this->error('gagal');
    }
    public function update(Request $request,$id){
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telepon = $request->input('telepon');
        $user->nik = $request->input('nik');
        $user->Password = $request->input('password');
        $user->image = $request->input('image');

        $user->save();
        return response()->json([
            'success' => 1,
            'message' => 'Selamat datang '.$user->name,
            'user'    => $user
        ]);

    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
