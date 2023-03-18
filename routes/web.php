<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_registerController;
use App\Http\Controllers\Wanna_tryController;
use App\Http\Controllers\Try_imageController;
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
Route::resource('/user_register', User_registerController::class);

// ルートの書き方に関してはもう一度見直す必要がある
Route::get('/wanna_try', [Wanna_tryController::class,'create'])->name('wanna_try.create');
Route::post('/wanna_try/store', [Wanna_tryController::class,'store'])->name('wanna_try.store');

Route::get('/try_image', [Try_imageController::class, 'create'])->name('image.create');
Route::post('/try_image/store', [Try_imageController::class, 'store'])->name('image.store');
Route::get('/try_image/sub_create', [Try_imageController::class, 'sub_create'])->name('image.sub_create');
Route::post('/try_image/sub_store', [Try_imageController::class, 'sub_store'])->name('image.sub_store');
Route::get('/try_image/subg3_create', [Try_imageController::class, 'subg3_create'])->name('image.subg3_create');
Route::post('/try_image/subg3_store', [Try_imageController::class, 'subg3_store'])->name('image.subg3_store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
