<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="tickets";

    protected $fillable = [
        'id_user',
        'id_jadwal',
        'jumlah',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'id_jadwal');
    }
}
