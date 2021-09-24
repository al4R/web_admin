<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mobil;
use App\Transaksi;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user['CountUser'] = User::count();
        $mobil['CountMobil'] = Mobil::count();
        $riwayat['CountRiwayat'] = Transaksi::where('status_tr',1)->where('status_bayar',2)->count();
        $cancel['CountCancel'] = Transaksi::where('cancel',1)->where('status_tr',0)->count();
        $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        for($bulan = 1 ; $bulan < 12; $bulan++){
            $chart = collect(DB::select("SELECT sum(total_harga) as total_harga  from transaksis where month(created_at)='$bulan'"))->first();
            $jumlah_transactions[] = (int)$chart->total_harga;
        }
        return view('home',['label'=>$label,'data'=>$jumlah_transactions])->with($user)->with($mobil)->with($riwayat)->with($cancel);

    }

}
