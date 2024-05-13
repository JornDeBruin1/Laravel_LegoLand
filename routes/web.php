<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\OpeningstijdenController;
use App\Http\Controllers\BestellingenController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccomodatiesController;
use App\Http\Controllers\AuthController;

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
Route::get('/attracties', [\App\Http\Controllers\AttractiesController::class, 'index'])->name('attracties');
Route::get('/openingstijden', [\App\Http\Controllers\OpeningstijdenController::class, 'index'])->name('openingstijden');
Route::get('/bestellingen', [\App\Http\Controllers\BestellingenController::class, 'index'])->name('bestellingen');
Route::post('/bestellingen/save', [\App\Http\Controllers\BestellingenController::class, 'store'])->name('bestellingen.store');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact'); 
Route::post('/contact/save', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/accomodaties', [\App\Http\Controllers\AccomodatiesController::class, 'index'])->name('accomodaties');
Route::get('/accomodaties/bestel', [\App\Http\Controllers\AccomodatieBestelController::class, 'index'])->name('accomodatie.bestel');

// Auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
 
// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);