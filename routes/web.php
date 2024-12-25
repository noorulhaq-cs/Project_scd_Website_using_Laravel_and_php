<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelationshipController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Database\Eloquent\Factories\Relationship;
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

Route::get('/search', [AdminController::class, 'search'])->name('search');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminController::class, 'store'])->name('admin.store');
    Route::get('{admin}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('{admin}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// Categories Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// Relationship Routes
Route::prefix('relationship')->group(function () {
    Route::get('/', [RelationshipController::class, 'index'])->name('relationship.index');
    Route::get('create', [RelationshipController::class, 'create'])->name('relationship.create');
    Route::post('/', [RelationshipController::class, 'store'])->name('relationship.store');
    Route::get('{relationship}', [RelationshipController::class, 'show'])->name('relationship.show');
    Route::get('{relationship}/edit', [RelationshipController::class, 'edit'])->name('relationship.edit');
    Route::put('{relationship}', [RelationshipController::class, 'update'])->name('relationship.update');
    Route::delete('{relationship}', [RelationshipController::class, 'destroy'])->name('relationship.destroy');
});






require __DIR__ . '/auth.php';