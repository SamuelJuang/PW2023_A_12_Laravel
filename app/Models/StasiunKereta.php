<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StasiunKereta extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaStasiun',
        'asalStasiun',
    ];
}
