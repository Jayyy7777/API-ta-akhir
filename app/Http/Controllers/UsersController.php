<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json(['data' => $user]);
    }

    public function user(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        //$barang->nama_barang = $request->input('nama_barang');
        $user->username = $request->input('username');  
        $user->password = $request->input('password'); 
        $user->save();

        return response()->json(['message' => 'Data user berhasil ditambahkan'], 201);
    }
}
