<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FormPemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index");
})->name('home');

Route::get("/paket", function() {
    return view("paket");
});
Route::get("/tentang-kami", function() {
    return view("tentang-kami");
});

// Route For Login
Route::get("/login",[LoginController::class, 'index'])->middleware('guest')->name("login_home");
Route::post("/login", [LoginController::class, 'login'])->middleware('guest')->name("login");
Route::get("/logout", [LoginController::class, 'logout'])->middleware('auth')->name('logut');

// Route For Signup
Route::get("/signup", [SignupController::class, 'index'])->middleware('guest');
Route::post("/signup", [SignupController::class, 'signup'])->middleware('guest')->name('signup');

// Form Pemesanan
Route::get("/formpemesanan", [FormPemesananController::class, 'index'])->middleware('auth');