<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Datainduk;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [Home::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ROUTES INTI

Route::get('/periode-rencana', [Datainduk::class, 'periode'])->middleware(['auth', 'verified'])->name('periode');
Route::get('get-user', [Datainduk::class, 'get_user'])->name('datainduk.get_user');


Route::get('users', [UserController::class, 'index']);
Route::get('users/data', [UserController::class, 'getUsers'])->name('users.data');

require __DIR__ . '/auth.php';
