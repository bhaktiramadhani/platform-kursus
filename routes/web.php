<?php

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;

Route::get('/', function () {
    $kursuses = \App\Models\Kursus::all();
    return view('welcome', compact('kursuses'));
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/kursus/{id}', function ($id) {
    $materis = Materi::where('kursus_id', $id)->get();
    return view('kursus.landing', compact('materis'));
})->name('kursus.landing');

Route::get('/materi/{id}', function ($id) {
    $materi = Materi::where('id', $id)->with('kursus')->first();
    return view('materi.index', compact('materi'));
})->name('materi.landing');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('dashboard')->group(function () {
    Route::resource('kursus', KursusController::class)->names('kursus');
    Route::resource('materi', MateriController::class)->names('materi');
    Route::get('get-materi/{id}', [MateriController::class, 'getMateri'])->name('get-materi');
})->middleware('auth');
