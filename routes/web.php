<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

route::get('/halaman-satu',[ BelajarController::class,'tampilHalamanSatu' ]);
route::get('/halaman-dua',[ BelajarController::class,'tampilHalamanDua' ]);
route::get('/halaman-tiga',[ BelajarController::class,'tampilHalamanTiga' ]);
route::get('/halaman-empat',[ BelajarController::class,'tampilHalamanEmpat' ]);
route::get('/halaman-lima',[ BelajarController::class,'tampilHalamanLima' ]);

route::get('/login',[ LoginController::class,'halamanLogin' ]);
route::get('/registrasi-akun-baru',[ LoginController::class,'halamanRegistrasi' ]);

route::get('/data-pengguna',[ PenggunaController::class,'dataPengguna' ]);
route::get('/tambah-pengguna',[ PenggunaController::class,'tambahPengguna' ]);
route::post('/simpan-pengguna',[ PenggunaController::class,'simpanPengguna' ]);
route::get('/ubah-pengguna/{id}',[ PenggunaController::class,'ubahPengguna' ]);
route::post('/simpan-perubahan/{id}',[ PenggunaController::class,'simpanPerubahan' ]);
route::get('/hapus-pengguna/{id}',[ PenggunaController::class,'hapusPengguna' ]);
