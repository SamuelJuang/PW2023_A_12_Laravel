<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginAuth extends Controller
{
    //
    function userLogin(Request $req){
        $data =  $req->input();
        $req->session()->put('user',$data['user']);
        $req->session()->put('password',$data['password']);
        if(session('user') == 'admin' && session('password') == 'admin'){
            return redirect('adminPage');
        }
        return redirect('/');
    }
}
