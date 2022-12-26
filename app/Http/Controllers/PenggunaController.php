<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    public function dataPengguna()
    {
        $varUser = User::latest()->paginate(2);
        // $varUser = User::orderBy('id','desc')->paginate(2);
        // $varUser = User::orderBy('id','desc')->get();
        // $varUser = User::latest()->get();
        return view('pengguna', compact('varUser'));
    }

    public function tambahPengguna()
    {
        return view('tambah-pengguna');
    }

    public function simpanPengguna(Request $request)
    {
        User::create([
            'name' => $request->namapengguna,
            'level' => 'user',
            'email' => $request->emailpengguna,
            'password' => bcrypt($request->passwordpengguna),
        ]);
        return redirect('data-pengguna');
    }
}
