<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; /* <--- 1. Tambahkan ini di atas */

Route::get('/', function () {
    return view('welcome');
});

/* <--- 2. Tambahkan ini di paling bawah */
Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);