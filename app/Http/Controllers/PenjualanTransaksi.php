<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;

class PenjualanTransaksi extends Controller
{
    // 
    public function index()
    {
        # code...
        $data = TransaksiPenjualan::all();
        return view('transaksi_penjualan.index', [
            'data'=>$data 
        ]);
    }

    public function create()
    {
        $data = MasterBarang::all();
        return view('transaksi_penjualan.create',[
            'data'=>$data
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_pembeli' => 'required',  
            'barang_id' => 'required',  
            'jumlah_barang' => 'required|numeric',  
        ]; 

        if($validated=$request->validate($rules)){
            $find = MasterBarang::find($validated['barang_id']);
            $validated['total_harga'] = $find->harga * $validated['jumlah_barang'];
            if(TransaksiPenjualan::create($validated)){
                $update['stok'] = $find->stok - $validated['jumlah_barang'];
                if ($find->update($update)) {
                    return redirect()->to('/penjualan')->with('success','Data transaksi berhasil ditambahkan.');
                }
            }
            return redirect()->to('/penjualan')->with('danger','Data transaksi gagal ditambahkan.');
        }
        return redirect()->back();
    }
}
