<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PhotoArchives\PhotoUploadController;
use App\Http\Controllers\PhotoArchives\PhotoViewController;

use App\Http\Controllers\Map\MapController;
use App\Http\Controllers\Profile\ProfileController;

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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/dashboard', [AuthController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/photo-archives', function () {
    return view('photo-archives/photo-archives');
})->name('main');

Route::resource('test', PhotoUploadController::class);
Route::get('/photo-archives', [PhotoViewController::class, 'view'])->name('photo-archives');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/map', [MapController::class, 'index'])->name('map');
// Route::get('/histories/{pageNum}', [MapController::class, 'loadMoreHistories'])->name('map.moreHistories');
//Route::get('/histories', [MapController::class, 'latestHistory'])->name('map.moreHistories');

require __DIR__.'/auth.php';
