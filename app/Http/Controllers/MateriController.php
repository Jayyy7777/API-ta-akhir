<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return response()->json(['data' => $materi]);
    }

    public function materi(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'id_pengguna' => 'required',
            'id_kategori' => 'required',
        ]);

        $materi = new Materi;
        //$barang->nama_barang = $request->input('nama_barang');
        $materi->judul = $request->input('judul');  
        $materi->isi = $request->input('isi');
        $materi->id_pengguna = $request->input('id_pengguna');
        $materi->id_kategori = $request->input('id_kategori');
        $materi->save();

        return response()->json(['message' => 'Data materi berhasil ditambahkan'], 201);
    }

    public function show ($id_kategori) {
        $materi = Materi::where('id_kategori', $id_kategori)->get();
        return response()->json(['data' => $materi]);
    }
}


