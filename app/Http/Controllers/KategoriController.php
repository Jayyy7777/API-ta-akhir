<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json(['data' => $kategori]);
    }

    public function kategori(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori = new Kategori;
        //$barang->nama_barang = $request->input('nama_barang');
        $kategori->nama_kategori = $request->input('nama_kategori');  
        $kategori->save();

        return response()->json(['message' => 'Data kategori berhasil ditambahkan'], 201);
    }
}
