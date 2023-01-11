<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primarykey = 'id';
    protected $fillable = [
        'namakategori',
        'total',
        'delstatus',
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}
