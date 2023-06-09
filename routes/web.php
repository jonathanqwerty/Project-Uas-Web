<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\App\Http\Middleware\CekLevel;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth','CekLevel:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/mahasiswa/list', [MahasiswaController::class, 'list']);
    Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
    Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/{id}',[MahasiswaController::class, 'update']);
    Route::get('/user/urutan',[MahasiswaController::class, 'userPage']);
});

Route::middleware('auth','CekLevel:admin,user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'editUser'])->name('profile.edit-user');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('listMatakuliah',[UserController::class, 'listMatakuliah']);
    Route::get('user/absen',[UserController::class, 'absenMahasiswa']);
    Route::get('/user/absen/{NIM}',[UserController::class, 'absen']);
    Route::get('user/absen',[UserController::class, 'list']);
    Route::get('user/listAbsen',[UserController::class, 'listAbsen']);
});


require __DIR__.'/auth.php';
