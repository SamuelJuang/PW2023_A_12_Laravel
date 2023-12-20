<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\KeretaApi;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    public function showByKereta($idKereta){
        $kereta = KeretaApi::where('id', $idKereta)->first();
        $reviews = Review::where('id_kereta', '=', $idKereta)->get();
        return view('reviewKereta', compact('reviews', 'kereta'));
    }
}
