<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'url',
        'tgl',
        'kategori_id',
        'user_id',
        'isi',
        'gambar',
        'delstatus',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}

