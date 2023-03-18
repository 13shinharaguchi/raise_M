<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_registerController;
use App\Http\Controllers\Wanna_tryController;
use App\Http\Controllers\Try_imageController;
use App\Http\Controllers\Partner_try_imageController;
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
Route::get('/partner_register', [User_registerController::class,'partner_register'])->name('partner_register');
Route::post('/partner_register/store', [User_registerController::class,'partner_register_store'])->name('partner_register_store');

// ルートの書き方に関してはもう一度見直す必要がある
Route::get('/wanna_try', [Wanna_tryController::class,'create'])->name('wanna_try.create');
Route::post('/wanna_try/store', [Wanna_tryController::class,'store'])->name('wanna_try.store');

//一人目のtry_image
Route::get('/try_image', [Try_imageController::class, 'create'])->name('image.create');
Route::post('/try_image/store', [Try_imageController::class, 'store'])->name('image.store');
Route::get('/try_image/sub_create', [Try_imageController::class, 'sub_create'])->name('image.sub_create');
Route::post('/try_image/sub_store', [Try_imageController::class, 'sub_store'])->name('image.sub_store');
Route::get('/try_image/subg3_create', [Try_imageController::class, 'subg3_create'])->name('image.subg3_create');
Route::post('/try_image/subg3_store', [Try_imageController::class, 'subg3_store'])->name('image.subg3_store');

//二人目のtry_image
Route::get('/partner_try_image', [Partner_try_imageController::class, 'partner_create'])->name('partner_image.create');
Route::post('/partner_try_image/store', [Partner_try_imageController::class, 'partner_store'])->name('partner_image.store');
Route::get('/partner_try_image/sub_create', [Partner_try_imageController::class, 'partner_sub_create'])->name('partner_image.sub_create');
Route::post('/partner_try_image/sub_store', [Partner_try_imageController::class, 'partner_sub_store'])->name('partner_image.sub_store');
Route::get('/partner_try_image/subg3_create', [Partner_try_imageController::class, 'partner_subg3_create'])->name('partner_image.subg3_create');
Route::post('/partner_try_image/subg3_store', [Partner_try_imageController::class, 'partner_subg3_store'])->name('partner_image.subg3_store');

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
