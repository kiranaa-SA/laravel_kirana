<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $filltable    = ['id', 'nama_kategori'];
    public    $timestamp   = true;

    // relasi ke tabel produk
    public function prooduk()
    {
        return $this->hasMany(Prooduk::class);
    }

}