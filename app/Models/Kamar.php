<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable =[
        'nomor_kamar', 
        'tipe', 
        'harga', 
        'deskripsi', 
        'fasilitas', 
        'kebijakan', 
        'jumlah_kamar',
    ];
}
