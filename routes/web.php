<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginAuth;
use App\Http\Controllers\JadwalKeretaController;
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
    if(session('user') == 'admin'){
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
    'users'=>[
        [
            'id' => 1,
            'username' => 'Sampjs',
            'noTelp' => '081271231',
            'email' => 'samuel@gmail.com',
            'password' => '12345678',
        ],
        [
            'id' => 2,
            'username' => 'Agatha',
            'noTelp' => '081312371',
            'email' => 'agatha@gmail.com',
            'password' => '12345678',
        ],
        [
            'id' => 3,
            'username' => 'Raff Gustafio',
            'noTelp' => '081309123',
            'email' => 'fio@gmail.com',
            'password' => '12345678',
        ],
        [
            'id' => 4,
            'username' => 'hayo siapa',
            'noTelp' => '081309123',
            'email' => 'fio@gmail.com',
            'password' => '12345678',
        ],
]
    ],
);
    }else{
        return view('frontPage');
    }
});

Route::post("user", [loginAuth::class,'userLogin']);

Route::get('/ticketSearch', function () {
    return view('ticketKetemu',
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

Route::get('/profile', function () {
    return view('profile', 
    [
        'ticket' =>[
        [
            'id' => 1,
            'namakereta' => "SAF JAYA",
            'kelas' => "Ekonomi - A",
            'harga' => 20000,
            'status' => "Payment Success",
            'rating' => 0,
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
            'status' => "Payment Pending",
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
            'status' => "Payment failed",
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
            'status' => "Payment Success",
            'rating' => 5,
            'asal' => "Stasiun Balapan Solo",
            'departDateTime' => mktime(11, 14, 54, 8, 12, 2014), #manggil ini pakai date kyk echo date("h:i")
            'tujuan' => "Stasiun Tugu Jogja",
            'arrivalDateTime' => mktime(12, 14, 54, 8, 12, 2014),
        ],
        ]
    ]);
});

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/');
});

Route::get('/DetailTicket', function () {
    return view('DetailTicket');
});

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
        'stasiun'=>[
            [
                'id' => 1,
                'namaStasiun' => 'Stasiun Solo Balapan',
                'asalStasiun' => 'Solo',
                'status' => 'New',
            ],
            [
                'id' => 2,
                'namaStasiun' => 'Stasiun Tugu',
                'asalStasiun' => 'Yogyakarta',
                'status' => 'New',
            ],
            [
                'id' => 3,
                'namaStasiun' => 'Stasiun Bandung',
                'asalStasiun' => 'Bandung',
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

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/reviewKereta', function () {
    return view('reviewKereta', [
        'ticket' =>[
        [
            'id' => 1,
            'nama' => "SAF JAYA Lover",
            'kelas' => "Ekonomi",
            'rating' => 5,
            'deskripsi' => "Sangat menyenangkan!, saya sangat menikmati penjalanan!"
        ],
        [
            'id' => 2,
            'nama' => "SAF? bukan gueh",
            'kelas' => "Bisnis",
            'rating' => 3,
            'deskripsi' => "mayan lah"
        ],
        [
            'id' => 3,
            'nama' => "Sampo",
            'kelas' => "Ekonomi",
            'rating' => 4,
            'deskripsi' => "yes"
        ],
        [
            'id' => 4,
            'nama' => "random",
            'kelas' => "Bisnis",
            'rating' => 5,
            'deskripsi' => "... enak"
        ],
        ]
    ]);
});

Route::get('/adminFront', function () {
    return view('adminFrontPage');
});
Route::get('/editTiket', function () {
    return view('editTiket');
});

Route::get('/EditProfile', function () {
    return view('EditProfile');
});

Route::get('/editStasiun', function () {
    return view('editStasiun');
});

Route::get('/editKereta', function () {
    return view('editKereta');
});

Route::get('/addTicket', function () {
    return view('addTicket');
});

Route::get('/addStasiun', function () {
    return view('addStasiun');
});

Route::get('/addKereta', function () {
    return view('addKereta');
});

