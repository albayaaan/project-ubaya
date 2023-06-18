<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetailProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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
    // return view('welcome');
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [DetailProfileController::class, 'index'])->name('profile');
    Route::get('/profile/{id}/edit', [DetailProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/store', [DetailProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile/storeLetter', [DetailProfileController::class, 'storeLetter'])->name('profile.storeLetter');

    Route::get('/test', [TestController::class, 'index'])->name('test');
});
