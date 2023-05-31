<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'home'])->name('home')->middleware('auth-jwt');
Route::get('/mitra', [ViewController::class, 'mitra'])->name('mitra');
Route::get('/proses', [ViewController::class, 'proses'])->name('proses');
Route::get('/riwayat', [ViewController::class, 'riwayat'])->name('riwayat');
Route::get('/viewmitra', [ViewController::class, 'viewmitra'])->name('viewmitra');
Route::get('/editprofile', [ViewController::class, 'editprofile'])->name('editprofile');
Route::get('/ubahpassword', [ViewController::class, 'ubahpassword'])->name('ubahpassword');

Route::get('/login', [ViewController::class, 'login'])->name('login')->middleware('have-token');
Route::get('/register', [ViewController::class, 'register'])->name('register')->middleware('have-token');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth-jwt');

Route::get('/gabungmitra', [ViewController::class, 'gabungmitra'])->name('gabungmitra')->middleware('auth-jwt');
Route::get('/editProfile', [ViewController::class, 'editProfile'])->name('editProfile')->middleware('auth-jwt');
Route::post('/editProfile', [AuthController::class, 'editProfile']);
Route::get('/avatar', [AuthController::class, 'getAvatar']);