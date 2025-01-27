<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get("/",[HomeController::class,"Home"])->name("home");
Route::get("contact",[HomeController::class,"Contact"])->name("contact");
Route::get("about_us",[HomeController::class,"aboutUs"])->name("about_us");
Route::get("gallery",[HomeController::class,"Gallery"])->name("gallery");



//backend
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::middleware(['auth'])->group(function () {
    Route::get("/backend",[BackendController::class,"Backend"]);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
