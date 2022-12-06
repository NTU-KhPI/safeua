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
})->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/dashboard', [AuthController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/photo-archives', [PhotoViewController::class, 'index'])->name('photos-index');
Route::post('/photo-archives', [PhotoViewController::class, 'store'])->name('photos-store');
Route::get('/my-photos', [PhotoViewController::class, 'indexMy'])->name('my-photos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/map', [MapController::class, 'index'])->name('map');

require __DIR__.'/auth.php';

Route::get('/volonter', function () {
    return view('help.volonter');
})->name('volonter');
