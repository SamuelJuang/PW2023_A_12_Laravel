<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeretaApi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "kereta_api";

    protected $fillable = [
        'namaKereta',
        'tipeKereta',
    ];
}
