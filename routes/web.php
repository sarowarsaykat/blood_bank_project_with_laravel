<?php

use App\Http\Controllers\ActiveDonorController;
use App\Http\Controllers\AssignDonorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\DonationCampaignController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
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

//frontend
Route::get("/",[HomeController::class,"Home"])->name("home");
Route::get("contact",[HomeController::class,"Contact"])->name("contact");
Route::get("about_us",[HomeController::class,"aboutUs"])->name("about_us");
Route::get("campaign_all",[HomeController::class,"campaignAll"])->name("campaign_all");
Route::get("campaign_single",[HomeController::class,"campaignSingle"])->name("campaign_single");
Route::get("blog_page_all",[HomeController::class,"blogPageAll"])->name("blog_page_all");
Route::get("blog_single_page",[HomeController::class,"blogSinglePage"])->name("blog_single_page");
Route::get("gallery",[HomeController::class,"Gallery"])->name("gallery");



//backend
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::middleware(['auth'])->group(function () {
    Route::get("/backend",[BackendController::class,"Backend"]);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//donor
Route::resource('donors', DonorController::class);
Route::patch('donors/{donor}/toggle-status', [DonorController::class, 'toggleStatus'])->name('donors.toggleStatus');

//active donor
Route::get('active_donors', [ActiveDonorController::class, 'index'])->name('active_donors.index');
Route::delete('active_donors/{id}', [ActiveDonorController::class, 'destroy'])->name('active_donors.destroy');

//blood request
Route::resource('blood_requests', BloodRequestController::class);
Route::get('assign_donor',[AssignDonorController::class,'create'])->name('assign_donor');

//Volunteers
Route::resource('volunteers', VolunteerController::class);

//donation_campaigns
Route::resource('donation_campaigns', DonationCampaignController::class);