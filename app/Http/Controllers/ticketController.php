<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class ticketController extends Controller
{   
    public function create($idJadwal, Request $request){
        $newData = $request->all();
    }
}
