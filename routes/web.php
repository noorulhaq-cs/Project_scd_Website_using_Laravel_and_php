<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoldWareController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('frontend.Boldware');
});

Route::get('/Men', [BoldWareController::class, 'Men'])->name('frontend.Men');
Route::get('/Women', [BoldWareController::class, 'Women'])->name('frontend.Women');

Route::get('/About', [BoldWareController::class, 'About'])->name('frontend.About');
Route::get('/Contact', [BoldWareController::class, 'Contact'])->name('frontend.Contact');

Route::get('/Shirts', [BoldWareController::class, 'Shirts'])->name('frontend.Shirts');
Route::get('/Product_detail', [BoldWareController::class, 'Product_detail'])->name('frontend.Productdetail');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('admin', AdminController::class);
// ->middleware(ValidAdmin::class);
Route::resource('categories', CategoryController::class);

Route::get('/search', [AdminController::class, 'search'])->name('search');

require __DIR__ . '/auth.php';