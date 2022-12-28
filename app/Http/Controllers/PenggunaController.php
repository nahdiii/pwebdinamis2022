<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    public function dataPengguna()
    {
        $varUser = User::where('delstatus','=',1)->latest()->paginate(3);
        // $varUser = User::orderBy('id','desc')->paginate(2);
        // $varUser = User::orderBy('id','desc')->get();
        // $varUser = User::latest()->get();
        return view('pengguna', compact('varUser'));
    }

    public function tambahPengguna()
    {
        return view('tambah-pengguna');
    }

    public function ubahPengguna($id)
    {
        $varUsr = User::findOrFail($id);
        return view('ubah-pengguna', compact('varUsr'));
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

    public function simpanPerubahan(Request $request, $id)
    {
        if ($request->passwordpengguna) {
            $varUsr = User::findOrFail($id);

            $data = [
                'name' => $request->namapengguna,
                'level' => 'user',
                'email' => $request->emailpengguna,
                'password' => bcrypt($request->passwordpengguna),
            ];

            $varUsr->update($data);
            return redirect('data-pengguna');
        }else{
            return back();
        };
    }

    public function hapusPengguna($id)
    {
        $varUsr = User::findOrFail($id);
        $varUsr->delete();
        return redirect('data-pengguna');
    }

}
