<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\GreetingController;
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

// Autentikasi
Route::get('/login', [ViewController::class, 'login'])->name('login')->middleware('have-token');
Route::get('/register', [ViewController::class, 'register'])->name('register')->middleware('have-token');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth-jwt');
// END Autentikasi

Route::get('/', [ViewController::class, 'home'])->name('home')->middleware('auth-jwt');
Route::get('/mitra', [ViewController::class, 'mitra'])->name('mitra');
Route::get('/proses', [ViewController::class, 'proses'])->name('proses');
Route::get('/riwayat', [ViewController::class, 'riwayat'])->name('riwayat');
Route::get('/viewmitra', [ViewController::class, 'viewmitra'])->name('viewmitra');
Route::get('/editprofile', [ViewController::class, 'editprofile'])->name('editprofile');
Route::get('/ubahpassword', [ViewController::class, 'ubahpassword'])->name('ubahpassword');
Route::get('/statusmitra', [PartnerController::class, 'mypartner'])->name('statusmitra');

Route::get('/gabungmitra', [ViewController::class, 'gabungmitra'])->name('gabungmitra')->middleware('auth-jwt');
Route::get('/editProfile', [ViewController::class, 'editProfile'])->name('editProfile')->middleware('auth-jwt');
Route::post('/editProfile', [AuthController::class, 'editProfile']);
Route::get('/avatar', [AuthController::class, 'getAvatar']);

Route::post('/gabungmitra', [PartnerController::class, 'store'])->name('gabungmitra')->middleware('auth-jwt');

Route::get('/call/{id}', [CallController::class, 'callNow'])->name('callNow');




// PARTNER CMS
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/table', [DashboardController::class, 'table'])->name('tabledashboard');
    Route::get('/utilities-color', [DashboardController::class, 'utilities_color']);
    Route::get('/utilities-border', [DashboardController::class, 'utilities_border']);
    Route::get('/utilities-animation', [DashboardController::class, 'utilities_animation']);
    Route::get('/utilities-other', [DashboardController::class, 'utilities_other']);
    Route::get('/buttons', [DashboardController::class, 'buttons']);
    Route::get('/cards', [DashboardController::class, 'cards']);
    Route::get('/charts', [DashboardController::class, 'charts']);
    Route::get('/blank', [DashboardController::class, 'blank'])->name('blank');
    Route::get('/404', [DashboardController::class, 'error_404'])->name('404');
    Route::get('/login', [DashboardController::class, 'login'])->name('dashboardlogin');
    Route::get('/register', [DashboardController::class, 'register'])->name('dashboardregister');
    Route::get('/forgot-password', [DashboardController::class, 'forgot_password'])->name('dashboardforgorpassword');

    // Route::get('partner', function () {
    //     return view('dashboard.partner.index');
    // })->name('partner.index');

    Route::get('/order/{id}',    [DashboardController::class, 'orderList'])->name('dashboard.order.index');
    Route::view('/order',    'mitra.dashboard.order.index')->name('dashboard.order.index');
    Route::view('/transaction',    'mitra.dashboard.transaction.index')->name('dashboard.transaction.index');
    Route::view('/review',     'mitra.dashboard.review.index')->name('dashboard.review.index');
    Route::view('/history',   'mitra.dashboard.history.index')->name('dashboard.history.index');
    Route::get('/activation', [DashboardController::class, 'activation'])->name('dashboard.activation.index');
    Route::view('/profile',   'mitra.dashboard.profile.index')->name('dashboard.profile.index');

});
// END PARTNER CMS
