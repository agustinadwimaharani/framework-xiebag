<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\tas;
use Illuminate\Http\Request;

class TasController extends Controller
{
    public function tambah()
    {
        return view('admin.create', [
            'kategoris' => kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'merk' => 'required|string',
            'warna' => 'required|string|max:20',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer|max:20',
            'harga' => 'required|integer',
            'kategori_id' => 'required'
        ]);
        tas::create($validateData);
        return redirect()->route('admin.data_product')->with('success', 'Data
            Tas Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.update', [
            'tas' => tas::all()->where('id', $id)->first(),
            'kategoris' => kategori::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string',
            'warna' => 'required|string|max:20',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer|max:20',
            'harga' => 'required|integer',
            'kategori_id' => 'required'
        ]);
        $tas = tas::findOrFail($id);
        $tas->update([
            'merk' => $request->merk,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect()->route('admin.data_product')->with('success', 'Data Tas
Berhasil Diubah');
    }


    public function delete($id){
        $tas = tas::findOrFail($id);
        $tas->delete();
        return redirect()->route('admin.data_product')->with('success','Data Tas
        Berhasil Dihapus');
        }

}


