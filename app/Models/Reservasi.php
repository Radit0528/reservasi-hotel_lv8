<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable =[
        'nomor_pesan' ,'username', 'email', 'telepon', 'tipe', 'jumlah_pesan', 'check_in', 'check_out', 'harga_dp'
    ];
}
