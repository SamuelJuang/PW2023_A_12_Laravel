<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jadwal;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Review;


class ticketController extends Controller
{   
    public function showProfile(){
        try{
            $tickets = Ticket::where('id_user','=',auth()->user()->id)->get();

            $tickets->each(function ($item){
                $keretaId = $item->jadwal->kereta->id;
                $review = Review::where('id_kereta','=',$keretaId)->where('id_user','=',auth()->user()->id)->first();
                $item->rating = $review;
            });
            return view('profile',compact('tickets'));
        }catch(\Exception $e) {
            return view('profile', ['tickets' => []]);
            \Log::error($e->getMessage());
        }
    }

    public function showTicket($id){
        try{
            $ticket = Ticket::find($id);
            return view('DetailTicket',compact('ticket'));
        }
    }

    public function store(Request $request){
        $newData = $request->all();
        $validate = Validator::make($newData,[
            'id_jadwal' => 'required',
            'jumlah' => 'required',
        ]);
        Ticket::create(
            [
                'id_user' => auth()->user()->id,
                'id_jadwal'=> $request->id_jadwal,
                'jumlah' => $request->jumlah,
                'status' => 'Payment Success',
            ]
        );

        $jadwal = Jadwal::find($request->id_jadwal);
        $jadwal->jumlah_kursi = $jadwal->jumlah_kursi - $request->jumlah;
        $jadwal->save();
    }
}
