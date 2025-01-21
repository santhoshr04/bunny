<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\dashboardController;
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
//     return view('auth/login');
// })->name('home');
Route::get('/', [PageController::class, 'index'])->name('landing');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/baby', [PageController::class, 'baby'])->name('services.baby');
Route::get('/services/birthday', [PageController::class, 'birthday'])->name('services.birthday');
Route::get('/services/cakesmash', [PageController::class, 'cakesmash'])->name('services.cakesmash');
Route::get('/services/family', [PageController::class, 'family'])->name('services.family');
Route::get('/services/maternity', [PageController::class, 'maternity'])->name('services.maternity');
Route::get('/services/newborn', [PageController::class, 'newborn'])->name('services.newborn');
Route::get('/services/sitter', [PageController::class, 'sitter'])->name('services.sitter');
Route::get('/services/toddler', [PageController::class, 'toddler'])->name('services.toddler');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/book', [PageController::class, 'book'])->name('book');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Prefix all dashboard-related routes
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'view'])->name('dashboard');
    Route::get('/services', [DashboardController::class, 'services'])->name('dashboard.services');
    Route::get('/gallery', [DashboardController::class, 'gallery'])->name('dashboard.gallery');
    Route::get('/moregallery', [DashboardController::class, 'moregallery'])->name('dashboard.moregallery');
    Route::get('/aboutus', [DashboardController::class, 'aboutus'])->name('dashboard.aboutus');
    Route::post('/homeuploadImage', [DashboardController::class, 'homeuploadImage'])->name('homeuploadImage');
    Route::post('/servicesuploadImage', [DashboardController::class, 'servicesuploadImage'])->name('servicesuploadImage');
    Route::post('/aboutusuploadImage', [DashboardController::class, 'aboutusuploadImage'])->name('aboutusuploadImage');
    Route::post('/galleryuploadImage', [DashboardController::class, 'galleryuploadImage'])->name('galleryuploadImage');
    Route::post('/moregalleryuploadImage', [DashboardController::class, 'moregalleryuploadImage'])->name('moregalleryuploadImage');
});