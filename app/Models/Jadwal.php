<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "jadwal";

    protected $fillable = [
        'asal',
        'tujuan',
        'id_kereta',
        'kelas',
        'jam_berangkat',
        'jam_tiba',
        'harga',
        'jumlah_kursi',
        'tanggal_pergi'
    ];

    public function kereta() {
        return $this->belongsTo(KeretaApi::class, 'id_kereta');
    }
}