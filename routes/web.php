<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PhotoArchives\PhotoUploadController;
use App\Http\Controllers\Map\MapController;

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
})->name('profile');

Route::get('/dashboard', [AuthController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/photo-archives', function () {
    return view('photo-archives/photo-archives');
})->name('main');

Route::resource('test', PhotoUploadController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/map', [MapController::class, 'index'])->name('map');
// Route::get('/histories/{pageNum}', [MapController::class, 'loadMoreHistories'])->name('map.moreHistories');
Route::get('/histories', [MapController::class, 'latestHistory'])->name('map.moreHistories');

require __DIR__ . '/auth.php';


// Route::get('/test', function () {
//     return view('photo-archives/test');
// })->name('test');
// Route::get('/test', [PhotoUploadController::class, 'index']);
// Route::post('/test', [PhotoUploadController::class, 'store'])->name('test');
