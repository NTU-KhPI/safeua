<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoArchives\PhotoViewController;
use App\Http\Controllers\PhotoArchives\MyPhotoViewController;

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
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/dashboard', [AuthController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/photo-archives', [PhotoViewController::class, 'index'])->name('photos-index');
Route::post('/photo-archives', [PhotoViewController::class, 'store'])->name('photos-store');
Route::get('/my-photos', [PhotoViewController::class, 'indexMy'])->name('my-photos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/map', [MapController::class, 'index'])->name('map');

require __DIR__.'/auth.php';
