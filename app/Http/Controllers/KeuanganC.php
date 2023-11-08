<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class KeuanganC extends Controller
{
    public function index()
    {
        return view('dashboard.pemasukan.index');
    }

    public function store(Request $req)
    {
        $req->validate([
            'nominal' => 'required|numeric',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $data = new Transaksi();
        $data->nominal = $req->input('nominal');
        $data->deskripsi = $req->input('deskripsi');
        $data->tanggal = $req->input('tanggal');

        $data->jenis = ($req['jenis']==true)?Transaksi::UANG_MASUK:Transaksi::UANG_KELUAR;
        $data->save();

        return redirect()->route('history');
    }

    public function history()
    {
        $totalUangMasuk = $this->getTotalUangMasuk();
        $totalUangKeluar = $this->getTotalUangKeluar();
        $history = Transaksi::all();

        $totalSisaUang = $totalUangMasuk - $totalUangKeluar;
        return view('dashboard.keuangan.index', compact('history', 'totalUangMasuk', 'totalUangKeluar', 'totalSisaUang'));
    }


    public function getTotalUangMasuk()
    {
        $totalUangMasuk = Transaksi::where('jenis', 1)->sum('nominal');

        return $totalUangMasuk;
    }

    public function getTotalUangKeluar()
    {
        $totalUangKeluar = Transaksi::where('jenis', 2)->sum('nominal');

        return $totalUangKeluar;
    }
}
