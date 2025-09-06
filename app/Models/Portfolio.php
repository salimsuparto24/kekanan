<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',      // Judul portofolio
        'description',// Deskripsi
        'image',      // Nama file gambar
    ];
}
