<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function edit()
    {
        return view('EditProfile');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $newData = $request->all();
        $validate = Validator::make($newData, [
            'username' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'profilePic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow null or valid image
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors()->first());
            return redirect('/profile');
        }

        $Newimage = $user->profilePic;

        if ($request->hasFile('profilePic')) {
            $gambar = $request->file('profilePic');
            $TodayConcated = date('dmYhis', time());
            $fileExtension = "." . $gambar->getClientOriginalExtension();
            $unikGambar = $TodayConcated . $fileExtension;
            $gambar->move(public_path('images'), $unikGambar);
            $Newimage = $unikGambar;

            if ($user->profilePic != null) {
                $fileToUpdate = public_path('images/') . $user->profilePic;
                if (file_exists($fileToUpdate)) {
                    unlink($fileToUpdate);
                }
            }
        }

        $user->update([
            'username' => $newData['username'],
            'profilePic' => $Newimage,
            'no_telp' => $newData['no_telp'],
        ]);

        return redirect('/profile');
    }

    public function showToAdmin($id)
    {
        $user = User::find($id);
        return view('editUser', compact('user'));
    }

    public function updateByAdmin(Request $request, $id)
    {
        $user = User::find($id);

        $newData = $request->all();
        $validate = Validator::make($newData, [
            'username' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'profilePic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors()->first());
            return redirect()->route('adminPage');
        }

        $Newimage = $user->profilePic;

        if ($request->hasFile('profilePic')) {
            $gambar = $request->file('profilePic');
            $TodayConcated = date('dmYhis', time());
            $fileExtension = "." . $gambar->getClientOriginalExtension();
            $unikGambar = $TodayConcated . $fileExtension;
            $gambar->move(public_path('images'), $unikGambar);
            $Newimage = $unikGambar;

            if ($user->profilePic != null) {
                $fileToUpdate = public_path('images/') . $user->profilePic;
                if (file_exists($fileToUpdate)) {
                    unlink($fileToUpdate);
                }
            }
        }

        $user->update([
            'username' => $newData['username'],
            'profilePic' => $Newimage,
            'no_telp' => $newData['no_telp'],
        ]);

        return redirect()->route('adminPage');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('adminPage');
        }
        $user->delete();

        if ($user->profilePic != null) {
            $fileToUpdate = public_path('images/') . $user->profilePic;
            if (file_exists($fileToUpdate)) {
                unlink($fileToUpdate);
            }
        }
        return redirect()->route('adminPage');
    }
}
