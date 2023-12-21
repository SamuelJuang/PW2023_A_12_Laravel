<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Jadwal;
use App\Models\Review;
use App\Models\KeretaApi;
use App\Models\User;
use Session;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kereta = KeretaApi::all();
        return view('addJadwalKereta',compact('kereta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newData = $request->all();
        try{
            $validate = Validator::make($newData,[
                'asal' => 'required',
                'tujuan' => 'required',
                'id_kereta' => 'required',
                'kelas' => 'required',
                'jam_berangkat' => 'required',
                'jam_tiba' => 'required',
                'harga' => 'required',
                'jumlah_kursi'=>'required',
                'tanggal_pergi'=>'required'
            ]);
            if($validate->fails()){
                Session::flash('error', $validate->errors()->first());
                return redirect()->route('adminPage');
            }
            Jadwal::create([
                'asal' => $request->asal,
                'tujuan' => $request->tujuan,
                'id_kereta' => $request->id_kereta,
                'kelas' => $request->kelas,
                'jam_berangkat' => $request->jam_berangkat,
                'jam_tiba' => $request->jam_tiba,
                'harga' => $request->harga,
                'jumlah_kursi'=>$request->jumlah_kursi,
                'tanggal_pergi'=>$request->tanggal_pergi
            ]);
            return redirect()->route('adminPage');
        }catch(\Exception $e){

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwal = Jadwal::find($id);
        $kereta = KeretaApi::all();
        return view('editJadwal',compact('jadwal','kereta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {
        $jadwal = Jadwal::find($id);
        $newData = $request->all();
        try{
            $validate = Validator::make($newData,[
                'asal' => 'required',
                'tujuan' => 'required',
                'id_kereta' => 'required',
                'kelas' => 'required',
                'jam_berangkat' => 'required',
                'jam_tiba' => 'required',
                'harga' => 'required',
                'jumlah_kursi'=>'required',
                'tanggal_pergi'=>'required'
            ]);
            if($validate->fails()){
                Session::flash('error', $validate->errors()->first());
                return redirect()->route('adminPage');
            }
            $jadwal->asal = $request->asal;
            $jadwal->tujuan = $request->tujuan;
            $jadwal->id_kereta = $request->id_kereta;
            $jadwal->kelas = $request->kelas;
            $jadwal->jam_berangkat = $request->jam_berangkat;
            $jadwal->jam_tiba = $request->jam_tiba;
            $jadwal->harga = $request->harga;
            $jadwal->jumlah_kursi = $request->jumlah_kursi;
            $jadwal->tanggal_pergi = $request->tanggal_pergi;
            $jadwal->save();

            return redirect()->route('adminPage');
        }catch(\Exception $e){

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect()->route('adminPage');
    }

    public function showByDate(Request $request)
    {
        $berangkat = request('StasiunAsal');
        $tiba = request('StasiunTujuan');
        $tgl = request('TglDepart');
        $jml = request('jumlah');
        try { 
            $jadwal = jadwal::where(
                'jadwal.asal', '=', $berangkat
            )->where(
                'jadwal.tujuan', '=', $tiba
            )->where(
                'jadwal.tanggal_pergi', '=', $tgl
            )->where(
                'jumlah_kursi','>=',$jml,
            )->get();

            $jadwal->each(function ($item) {
                $item->averageRating = Review::where('id_kereta','=',$item->id_kereta)->avg('rekomendasi');
            });

            return view('ticketKetemu', compact('jadwal'));
        }
        catch(\Exception $e) {
            return view('ticketKetemu', ['jadwal' => []]);
            \Log::error($e->getMessage());
        }
    }

    public function ShowFrontPage(){
        $stasiunAsalOptions = Jadwal::pluck('asal', 'asal');
        $stasiunTujuanOptions = Jadwal::pluck('tujuan', 'tujuan');

        return view('frontPage', [
            'stasiunAsalOptions' => $stasiunAsalOptions,
            'stasiunTujuanOptions' => $stasiunTujuanOptions,
        ]);
    }

    public function showAdminFrontPage(){
        $jadwal = Jadwal::all();
        $kereta = KeretaApi::all();
        $user = User::all();
        return view('adminPage', compact('jadwal', 'kereta', 'user'));
    }
}
