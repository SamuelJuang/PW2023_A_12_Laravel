<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeretaApi;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class KeretaApiController extends Controller
{
    public function store(Request $request){
        
        $newData = $request->all();
        try{
            $validate = Validator::make($newData,[
                'namaKereta'=>'required',
                'tipeKereta'=>'required',
            ]);
            if($validate->fails()){
                Session::flash('error', $validate->errors()->first());
                return redirect()->route('adminPage');
            }
            KeretaApi::create([
                'namaKereta' => $request->namaKereta,
                'tipeKereta' => $request->tipeKereta,
            ]);
            return redirect()->route('adminPage');
        }catch(\Exception $e){
            return redirect()->route('adminPage');
        }
    }

    public function create(){
        return view('addKereta');
    }

    public function show(String $id){
        $kereta = KeretaApi::find($id);
        return view('editKereta',compact('kereta'));
    }

    public function update(Request $request, string $id)
    {
        $kereta = KeretaApi::find($id);
        $newData = $request->all();
        try{
            $validate = Validator::make($newData,[
                'namaKereta'=>'required',
                'tipeKereta'=>'required',
            ]);
            if($validate->fails()){
                Session::flash('error', $validate->errors()->first());
                return redirect()->route('adminPage');
            }
            $kereta->update([
                'namaKereta' => $request->namaKereta,
                'tipeKereta' => $request->tipeKereta,
            ]);
            return redirect()->route('adminPage');
        }catch(\Exception $e){
            return redirect()->route('adminPage');
        }
    }

    public function destroy(string $id)
    {
        $kereta = KeretaApi::find($id);
        $kereta->delete();
        return redirect()->route('adminPage');
    }
}
