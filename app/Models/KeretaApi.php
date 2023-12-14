<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeretaApi extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaKereta',
        'tipeKereta',
    ];
}
