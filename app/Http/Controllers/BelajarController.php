<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function tampilHalamanSatu(){
        $tes = "Halo Ini Variabel dari BelajarController";

        return view('beranda.halaman1',compact('tes'));
    }
    public function tampilHalamanDua(){
        return view('beranda.halaman2');
    }
    public function tampilHalamanTiga(){
        return view('beranda.halaman3');
    }
    public function tampilHalamanEmpat(){
        return view('beranda.halaman4');
    }
    public function tampilHalamanLima(){
        return view('beranda.halaman5');
    }
}
