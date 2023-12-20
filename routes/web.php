<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [JadwalController::class,'ShowFrontPage'])->name('ShowFrontPage');

Route::get('/logout', [LoginController::class,'actionLogout'])->middleware('auth')->name('logout');
Route::get('/login', [LoginController::class , 'login'])->name('login');
Route::post('/actionLogin',[LoginController::class, 'actionLogin'])->name('actionLogin');

Route::get('editProfile', [UserController::class, 'edit'])->name('editProfile');
Route::post('updateprofile/{id}',[UserController::class,'update'])->name('updateprofile');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}',[RegisterController::class, 'verify'])->name('verify');

Route::get('/profile',[ticketController::class,'showProfile'])->middleware('auth')->name('profile');

Route::get('/ticket_ketemu/', [JadwalController::class, 'showByDate'])->name('ticket_ketemu');
Route::get('/showTicket/{id}',[ticketController::class,'showTicket'])->middleware('auth')->name('showTicket');
Route::post('/storeTicket',[ticketController::class,'store'])->middleware('auth')->name('storeTicket');

Route::get('/rating/{id}',[ReviewController::class, 'inputReview'])->middleware('auth')->name('rating');
Route::post('/InputReview',[ReviewController::class,'store'])->middleware('auth')->name('inputReview');


Route::get('/adminPage', function () {
    return view('adminPage',
    [
        'ticket' =>[
        [
            'id' => 1,
            'namakereta' => "SAF JAYA",
            'kelas' => "Ekonomi - A",
            'harga' => 20000,
            'status' => "Available",
            'rating' => 5,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i") buat waktu
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
        [
            'id' => 2,
            'namakereta' => "SAF JAYA 2",
            'kelas' => "Bisnis - A",
            'harga' => 50000,
            'status' => "Available",
            'rating' => 4,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i")
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
        [
            'id' => 3,
            'namakereta' => "SAF JAYA",
            'kelas' => "Ekonomi - A",
            'harga' => 20000,
            'status' => "Available",
            'rating' => 3,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i")
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
        [
            'id' => 4,
            'namakereta' => "SAF JAYA",
            'kelas' => "Ekonomi - A",
            'harga' => 20000,
            'status' => "Available",
            'rating' => 5,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i")
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
    ],
        'user'=>[
            [
                'id' => 1,
                'username' => 'Fio',
                'email' => 'fio@gmail.com',
                'status' => 'New',
            ],
            [
                'id' => 2,
                'username' => 'Samuel',
                'email' => 'samuel@gmail.com',
                'status' => 'New',
            ],
            [
                'id' => 3,
                'username' => 'Agatha',
                'email' => 'agatha@gmail.com',
                'status' => 'New',
            ],
    ],
        'kereta'=>[
        [
            'id' => 1,
            'namaKereta' => 'SAF JAYA',
            'tipeKereta' => 'Ekonomi - A',
            'status' => 'New',
        ],
        [
            'id' => 2,
            'namaKereta' => 'SAF JAYA',
            'tipeKereta' => 'Bisnis - A',
            'status' => 'New',
        ],
        [
            'id' => 3,
            'namaKereta' => 'SAF JAYA',
            'tipeKereta' => 'Bisnis - A',
            'status' => 'New',
        ],
    ]

    ]
);
});



Route::get('/reviews/{idKereta}', [ReviewController::class, 'showByKereta'])->name('reviews.byKereta');

Route::get('/adminFront', function () {
    return view('adminFrontPage');
});
Route::get('/editTiket', function () {
    return view('editTiket');
});


Route::get('/editUser', function () {
    return view('editUser');
});

Route::get('/editKereta', function () {
    return view('editKereta');
});

Route::get('/addTicket', function () {
    return view('addTicket');
});

Route::get('/addUser', function () {
    return view('addUser');
});

Route::get('/addKereta', function () {
    return view('addKereta');
});
