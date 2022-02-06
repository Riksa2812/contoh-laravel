<?php

namespace App\Http\Controllers;
use App\Models\MasterBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = MasterBarang::all();
        return view('barang.index', [
            'data'=>$data 
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',  
            'harga' => 'required|numeric',  
            'stok' => 'required|numeric',  
        ]; 

        if($validated=$request->validate($rules)){
            if(MasterBarang::create($validated)){
                return redirect()->to('/barang')->with('success','Data berhasil ditambahkan.');
            }
            return redirect()->to('/barang')->with('danger','Data gagal ditambahkan.');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MasterBarang::find($id);
        return view('barang.edit', [
            'data' => $data
        ]);
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
        $rules = [
            'nama' => 'required',  
            'harga' => 'required|numeric',  
            'stok' => 'required|numeric',  
        ]; 

        if($validated=$request->validate($rules)){
            $find = MasterBarang::find($id);
            if ($find->update($validated)) {
                return redirect()->to('/barang')->with('success','Data berhasil diperbarui.');
            }
            return redirect()->to('/barang')->with('danger','Data gagal diperbarui.');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = MasterBarang::find($id);
        if ($find->delete()) {
            return redirect()->to('/barang')->with('success','Data berhasil dihapus.');
        }
        return redirect()->to('/barang')->with('danger','Data gagal dihapus.');
    }
}
