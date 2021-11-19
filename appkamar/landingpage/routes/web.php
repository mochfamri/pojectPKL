<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardTermController;
use App\Http\Controllers\DashboardRefundController;
use App\Http\Controllers\DashboardPrivacyController;
use App\Http\Controllers\DashboardContactusController;

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

// Route::get('/', function () {
    // return view('login', [
        // "nama" => "Moch Famri Noer Priambodo",
        // "email" => "zhemz2015@gmail.com",
        // "image" => "background.jpg",

    // ]);
// });


// Route::get('/', function () {
//     return view('home', [
//         "tittle" => "Home"
//     ]);
// });
// Route::get('/PrivacyPolicy', function () {
//     return view('PrivacyPolicy', [
//         "tittle" => "Privacy Policy"
//     ]);
// });
// Route::get('/TermsConditions', function () {
//     return view('Terms', [
//         "tittle" => "Terms $ Conditions"
//     ]);
// });
// Route::get('/RefundPolicy', function () {
//     return view('Refund', [
//         "tittle" => "Refund Policy"
//     ]);
// });

// Route Login
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);
// Route Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Route Registration
Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store']);
// Dashboard
Route::get('/dashboard', function(){
    return view('admin.dashboard.index');
})->middleware('auth');

// Dasboard Privacy
// Route::get('/privacy/checkSlug', [DashboardPrivacyController::class, 'checkSlug'])->middleware('auth');
Route::resource('/privacy', DashboardPrivacyController::class);
// Dashboard Refund
Route::resource('/refund', DashboardRefundController::class);
// Dashboard Terms
Route::resource('/term', DashboardTermController::class);
// Dashboard ContactUs
Route::resource('/mail', DashboardContactusController::class);
// Dashboard ContactUs
Route::resource('/about', AboutController::class);

// Landing
Route::get('/', [LandingController::class, 'index']);

//Privacy Policy
Route::get('/PrivacyPolicy', [PrivacyController::class, 'index']);
// Route::get('/PrivacyPolicy/{PrivacyPolicy:slug}', [PrivacyController::class, 'show']);
//Refund Policy
Route::get('/RefundPolicy', [RefundController::class, 'index']);
//Terms & Conditions
Route::get('/TermsConditions', [TermController::class, 'index']);
// Contact Us
Route::get('/contactus', [ContactusController::class, 'index'])->name('contact-us');
Route::post('/contactus', [ContactusController::class, 'storeContactUs'])->name('contact-us.store');
// Route::get('/contactus', [ContactusController::class, 'sendEmail']);
// Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');
// Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');