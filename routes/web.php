<?php

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [UserAuthController::class, 'show'])->name('home'); 
Route::get('/mitra', [ViewController::class, 'mitra'])->name('mitra');
Route::get('/proses', [ViewController::class, 'proses'])->name('proses');
Route::get('/riwayat', [ViewController::class, 'riwayat'])->name('riwayat');
Route::get('/viewmitra', [ViewController::class, 'viewmitra'])->name('viewmitra');

Route::get('/login', [ViewController::class, 'login'])->name('logout');
Route::get('/register', [ViewController::class, 'register'])->name('login');


Route::get('/UserAuth', [UserAuthController::class, 'logout'])->name('show');
Route::post('/register', [UserAuthController::class, 'register'])->name('register');
Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

// Route::post('/register', function (Request $request) {
//    $response = Http::post('http://localhost/api/user/register', [
//        'name' => $request->username,
//        'role' => 'Network Administrator',
//    ]);
//    localStorage.setItem("myCat", "Tom");
// });

