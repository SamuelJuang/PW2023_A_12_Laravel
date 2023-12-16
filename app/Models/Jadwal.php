<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'asal',
        'tujuan',
        'nama_kereta',
        'kelas',
        'jam_berangkat',
        'harga',
        'jumlah_kursi',
    ];
}