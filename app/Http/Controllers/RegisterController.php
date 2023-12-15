<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\AuthMail;
use Session;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionRegister(Request $request){
        $str = Str::random(100);
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'verify_key' => $str,
        ]);

        $details = [
            'username' =>$request->username,
            'website' => 'Atma Library',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new AuthMail($details));

        Session::flash('message','Link Verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('/');
    }

    public function verify($verify_key){
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();
        
        if($keyCheck){
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

            return "Verifikasi berhasil. akun anda sudah aktif. ";
        }else{
            return "Keys tidak valid.";
        }
    }
}
