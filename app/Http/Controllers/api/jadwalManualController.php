<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jadwal;

class jadwalManualController extends Controller
{
   public function retrieveAllJadwals(){
    $jadwal = Jadwal::all();

    if(count($jadwal) > 0){
        return response([
            'message' => 'Retrieve All Success',
            'data' => $jadwal
        ],200);
    }

    return response([
        'message' => 'Empty',
        'data' =>null
    ],400);
   }


   public function showByDate($tgl)
    {
        try { 
            $jadwal = jadwal::join(
                'kereta_api', 'kereta_api.id' , '=', 'jadwal.id_kereta'
            )->where(
                'jadwal.tanggal_pergi', '=', $tgl
            )->get();

            $jadwal->each(function ($item) {
                $item->averageRating = Review::where('id_kereta','=',$item->id_kereta)->avg('rekomendasi');
            });

            if(count($jadwal) > 0){
                return response([
                    'message' => 'Retrieve All Success',
                    'data' => $jadwal
                ],200);
            }
        
            return response([
                'message' => 'Empty',
                'data' =>null
            ],400);
        }
        catch(\Exception $e) {
            return response([
                'message' => 'Failed' . $e->getMessage()
            ],400);
        }
    }
}
