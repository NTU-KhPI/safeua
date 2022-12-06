<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoArchives\PhotoUploadController;

use App\Http\Controllers\MapController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/dashboard', [AuthController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/main', function () {
    return view('photo-archives/main-photo-archives');
})->name('main');

// Route::get('/test', function () {
//     return view('photo-archives/test');
// })->name('test');
// Route::get('/test', [PhotoUploadController::class, 'index']);
// Route::post('/test', [PhotoUploadController::class, 'store'])->name('test');

Route::resource('test', PhotoUploadController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/map', [MapController::class, 'index'])->name('map');

require __DIR__.'/auth.php';

Route::get('/volonter', function () {
    return view('help.volonter');
})->name('volonter');
