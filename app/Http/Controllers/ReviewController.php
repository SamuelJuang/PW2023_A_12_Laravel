<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\KeretaApi;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;

class ReviewController extends Controller
{   
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get review and user
        $reviews = Review::all();
        return view('adminReviewPage', compact('reviews'));
    }


    public function destroy(string $id)
    {
        $review= Review::find($id);
        $review->delete();
        return redirect()->route('reviewForAdmin');
    }
    public function showByKereta($idKereta){
        $kereta = KeretaApi::where('id', $idKereta)->first();
        $reviews = Review::where('id_kereta', '=', $idKereta)->get();
        return view('reviewKereta', compact('reviews', 'kereta'));
    }

    public function store(Request $request){
        $newData = $request->all();
        try{
            $validate = Validator::make($newData,[
                'id_kereta' => 'required',
                'rekomendasi' => 'required',
                'content' => 'required'
            ]);
            if($validate->fails()){
                Session::flash('error', $validate->errors()->first());
                return redirect('register');
            }
            Review::create([
                'id_user' => auth()->user()->id,
                'id_kereta' => $request->id_kereta,
                'rekomendasi' => $request->rekomendasi,
                'content' => $request->content,
            ]);
            return redirect()->route('profile');
        }catch(\Exception $e){
            return redirect()->route('profile');
        }
    }

    public function inputReview($idKereta){
        $kereta = KeretaApi::where('id', $idKereta)->first();
        return view('rating',compact('kereta'));
    }
}
