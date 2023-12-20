<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\KeretaApiController;


//fungsi-fungsi utama
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
Route::get('/reviews/{idKereta}', [ReviewController::class, 'showByKereta'])->name('reviews.byKereta');



//ini buad admin
Route::get('/adminPage',[JadwalController::class,'showAdminFrontPage'])->name('adminPage');
Route::get('/tambahJadwal',[JadwalController::class,'create'])->name('tambahJadwal');
Route::post('/storeJadwal',[JadwalController::class,'store'])->name('storeJadwal');
Route::get('/editJadwal/{id}',[JadwalController::class,'show'])->name('editJadwal');
Route::put('/updateJadwal/{id}',[JadwalController::class,'edit'])->name('updateJadwal');
Route::delete('/deleteJadwal/{id}',[JadwalController::class,'destroy'])->name('deleteJadwal');

Route::post('/storeKereta',[KeretaApiController::class,'store'])->name('storeKereta');
Route::get('editKereta/{id}',[KeretaApiController::class,'show'])->name('editKereta');
Route::put('/updateKereta/{id}',[KeretaApiController::class,'update'])->name('updateKereta');
Route::delete('/deleteKereta/{id}',[KeretaApiController::class,'destroy'])->name('deleteKereta');

Route::get('/reviewForAdmin',[ReviewController::class,'index'])->name('reviewForAdmin');
Route::delete('/deleteReview/{id}',[ReviewController::class,'destroy'])->name('deleteReview');