<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontPage');
});


Route::get('/ticketSearch', function () {
    return view('ticketKetemu',
    [
        'ticket' =>[
        [
            'id' => 1,
            'namakereta' => "SAF JAYA",
            'kelas' => "Economy - A",
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
            'kelas' => "Luxury - A",
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
            'kelas' => "Economy - A",
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
            'kelas' => "Economy - A",
            'harga' => 20000,
            'status' => "Available",
            'rating' => 5,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i")
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
        ]
    ]
);
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});