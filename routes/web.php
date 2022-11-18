<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoArchives\PhotoUploadController;

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
});

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

require __DIR__.'/auth.php';
