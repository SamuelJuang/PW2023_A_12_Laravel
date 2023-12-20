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
                return redirect('register');
            }
        }catch(\Exception $e){

        }
    }

    public function create(){

    }

    public function show(String $id){
        $kereta = KeretaApi::find($id);
        return view('',compact('kereta'));
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
                return redirect('register');
            }
        }catch(\Exception $e){

        }
    }

    public function destroy(string $id)
    {
        $kereta = KeretaApi::find($id);
        $kereta->delete();
        return;
    }
}
