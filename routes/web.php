<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/earthquake', [\App\Http\Controllers\EarthquakeController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('earthquake.index');
Route::get('/earthquake/create', [\App\Http\Controllers\EarthquakeController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('earthquake.create');
Route::get('/earthquake/{earthquake}', [\App\Http\Controllers\EarthquakeController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('earthquake.show');

Route::post('/earthquake/store', [\App\Http\Controllers\EarthquakeController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('earthquake.store');

Route::delete('/earthquake/{earthquake}', [\App\Http\Controllers\EarthquakeController::class, 'destroy'])
    ->middleware(['auth', 'verified'])->name('earthquake.destroy');

Route::patch('/earthquake/{earthquake}', [\App\Http\Controllers\EarthquakeController::class, 'update'])
    ->middleware(['auth', 'verified'])->name('earthquake.update');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
