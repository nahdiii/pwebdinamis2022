<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BeritaController extends Controller
{
    public function store(Request $request)
    {
        Berita::create([
            'judul' => $request->judul,
            'url' => Str::slug($request->judul,'-'),
            'tgl' => $request->tgl,
            'kategori_id' => $request->kategori_id,
            'user_id' => auth()->user()->id,
            'isi' => $request->isi,
            'gambar' => null,
            'delstatus' => true,

        ]);
        return redirect('data-berita');
    }
    public function index()
    {
        $berita = Berita::with('kategori','user')->where('delstatus','=',true)->latest()->paginate(3);
        return view('Berita.data-berita', compact('berita'));
    }
    public function lihatSingleBerita($url)
    {
        $berita = Berita::with('user','kategori')->where([
                ['delstatus','=',true],
                ['url','=',$url]
            ])->first();

            return view('Berita.single-berita', compact('berita'));
    }
    public function create()
    {
        $kate = Kategori::where('delstatus','=',true)->latest()->get();
        return view('Berita.tambah-berita',compact('kate'));
    }



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
