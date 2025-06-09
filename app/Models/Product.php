<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function up()
    {
    Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('deskripsi');
        $table->string('kategori');
        $table->string('foto');
        $table->timestamps();
    });
    }
}
