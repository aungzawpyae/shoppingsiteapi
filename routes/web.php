<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCollectionController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);

Route::resource('/products', ProductController::class);
Route::resource('/banners', BannerController::class);
Route::resource('/collection', ProductCollectionController::class);
Route::resource('/announcement', AnnouncementController::class);


Route::get('/hello', [ProductCollectionController::class, 'hello']);

require __DIR__.'/auth.php';
