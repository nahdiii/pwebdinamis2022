<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;


route::get('/login',[ LoginController::class,'halamanLogin' ])->name('login');
route::get('/registrasi-akun-baru',[ LoginController::class,'halamanRegistrasi' ]);

route::post('/post-login',[ LoginController::class,'postLogin' ])->name('post-login');
route::get('/logout',[ LoginController::class,'logout' ]);

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    route::get('/halaman-satu',[ BelajarController::class,'tampilHalamanSatu' ]);
    route::get('/halaman-dua',[ BelajarController::class,'tampilHalamanDua' ]);
    route::get('/halaman-tiga',[ BelajarController::class,'tampilHalamanTiga' ]);
    route::get('/halaman-empat',[ BelajarController::class,'tampilHalamanEmpat' ]);
    route::get('/halaman-lima',[ BelajarController::class,'tampilHalamanLima' ]);


    route::get('/data-pengguna',[ PenggunaController::class,'dataPengguna' ]);
    route::get('/tambah-pengguna',[ PenggunaController::class,'tambahPengguna' ]);
    route::post('/simpan-pengguna',[ PenggunaController::class,'simpanPengguna' ]);
    route::get('/ubah-pengguna/{id}',[ PenggunaController::class,'ubahPengguna' ]);
    route::post('/simpan-perubahan/{id}',[ PenggunaController::class,'simpanPerubahan' ]);
    route::get('/hapus-pengguna/{id}',[ PenggunaController::class,'hapusPengguna' ]);


    route::get('/data-kategori',[ KategoriController::class,'index' ]);
    route::get('/tambah-kategori',[ KategoriController::class,'create' ]);

});
