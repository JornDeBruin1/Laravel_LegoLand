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
Route::get('/attractiesAdmin/{attractie}', [\App\Http\Controllers\AttractiesAdminController::class, 'show'])->name('attracties.admin.show');
Route::get('/attracties/{attractie}', [\App\Http\Controllers\AttractiesController::class, 'show'])->name('attracties.detail');
Route::get('/openingstijden', [\App\Http\Controllers\OpeningstijdenController::class, 'index'])->name('openingstijden');
Route::get('/openingstijden/{openingstijd}', [\App\Http\Controllers\OpeningstijdenController::class, 'show'])->name('openingstijden.admin');
Route::post('/openingstijden/{id}/edit', [\App\Http\Controllers\OpeningstijdenAdminController::class, 'show'])->name('openingstijden@edit');
Route::get('/bestellingen', [\App\Http\Controllers\BestellingenController::class, 'index'])->name('bestellingen');
Route::post('/bestellingen/save', [\App\Http\Controllers\BestellingenController::class, 'store'])->name('bestellingen.store');
Route::get('/bestellingAdmin',[\App\Http\Controllers\BestellingAdminController::class, 'index'])->name('bestellingAdmin');
Route::get('/bestellingAdmin/{ticket}/edit',[\App\Http\Controllers\bestellingAdminController::class,'show'])->name('bestellingAdmin.show');
Route::post('/bestellingAdmin/save', [\App\Http\Controllers\BestellingAdminController::class, 'store'])->name('bestellingAdmin.store');
Route::post('/bestellingAdmin/{ticket}/update', [\App\Http\Controllers\BestellingAdminController::class,'update'])->name('bestellingAdmin.update');
Route::get('/bestellingAdmin/{ticket}/delete', [\App\Http\Controllers\BestellingAdminController::class,'destroy'])->name('bestellingAdmin.destroy');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact'); 
Route::post('/contact/save', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/accomodaties', [\App\Http\Controllers\AccomodatiesController::class, 'index'])->name('accomodaties');
Route::get('/accomodaties/{accomodatie}', [\App\Http\Controllers\AccomodatieBestelController::class, 'show'])->name('accomodatie.bestel');
Route::post('/accomodaties/save', [\App\Http\Controllers\ReserveringController::class, 'store'])->name('reservering.store');
Route::get('/accomodatieAdmin',[\App\Http\Controllers\AccomodatieAdminController::class, 'index'])->name('accomodatieAdmin');
Route::post('/accomodatiesAdmin/save',[\App\Http\Controllers\AccomodatieAdminController::class,'store'])->name('accomodatieAdmin.store');
Route::get('/accomodatiesAdmin/{accomodatie}/edit',[\App\Http\Controllers\AccomodatieAdminController::class,'show'])->name('accomodatieAdmin.show');
Route::post('/accomodatiesAdmin/{accomodatie}/update', [\App\Http\Controllers\AccomodatieAdminController::class,'update'])->name('accomodatieAdmin.update');
Route::get('/accomodatiesAdmin/{accomodatie}/delete', [\App\Http\Controllers\AccomodatieAdminController::class,'destroy'])->name('accomodatieAdmin.destroy');

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