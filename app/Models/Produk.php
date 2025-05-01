<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel jika tidak sesuai dengan plural form dari nama model
    protected $table = 'produks';
}
