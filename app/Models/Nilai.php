<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'jenis_kelamin','kelas','mapel','nilai'];
    public $timestamp = true;

}
