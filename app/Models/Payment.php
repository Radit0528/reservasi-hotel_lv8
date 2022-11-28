<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =[
        'nomor_pesan',
        'tanggal_pesan',
        'username',
        'email',
        'telepon',
        'metode_pembayaran',
        'harga_total',
    ];
}
