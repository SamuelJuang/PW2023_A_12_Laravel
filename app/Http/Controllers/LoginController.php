<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('/frontPage');
        }else{
            return view('/login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            $user = Auth::user();

            if($user->email_verified_at){
                return redirect('/');
            }else{
                Auth::logout();
                Session::flash('error','Akun Anda belum diverifikasi, silahkan cek email anda.');
                return redirect('/login');
            }
        }else if($request->input('email') == 'admin' && $request->input('password') == 'admin'){
            return redirect('/adminPage'); // janlup admin route
        }else{
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }
    }

    public function actionLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
