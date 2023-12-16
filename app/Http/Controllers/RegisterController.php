<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\AuthMail;
use Illuminate\Validation\Rule;
use Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionRegister(Request $request){
        $newData = $request->all();
        $validate = Validator::make($newData,[
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email'),
            ],
            'no_telp' => 'required|string|max:15',
        ]);
        
        if($validate->fails()){
            Session::flash('error', $validate->errors()->first());
            return redirect('register');
        }

        $str = Str::random(100);
    
        try {

            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'verify_key' => $str,
            ]);
    

            $details = [
                'username' => $request->username,
                'website' => 'SAF Kereta Online',
                'datetime' => date('Y-m-d H:i:s'),
                'url' => request()->getHttpHost() . '/register/verify/' . $str,
            ];
    

            Mail::to($request->email)->send(new AuthMail($details));

            return redirect('/');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect('register');
        }
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
