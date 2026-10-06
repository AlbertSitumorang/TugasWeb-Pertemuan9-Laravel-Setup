<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// ===== Requirement 4: 3 route custom =====
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// ===== Requirement 5: View dengan data dinamis (array dari route) =====
Route::get('/skills', function () {
    $skills = [
        'PHP & Laravel',
        'MySQL',
        'JavaScript',
        'Cyber Security (belajar)',
    ];
    return view('skill', ['skills' => $skills]);
});

// ===== Bonus: route parameter =====
Route::get('/hello/{nama}', function ($nama) {
    return "<h2>Halo, " . htmlspecialchars($nama) . "!</h2>";
});

// ===== Requirement 6: Route yang pakai Controller & Model =====
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);