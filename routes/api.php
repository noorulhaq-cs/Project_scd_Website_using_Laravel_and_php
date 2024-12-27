<?php

use App\Http\Controllers\Api\AdminApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('login', [AuthController::class, 'login']);




// Group routes with a common prefix and middleware if necessary
Route::middleware('auth:api')->group(function () {
    // Protected routes for authenticated users
    Route::get('/profile', function (Request $request) {
        return response()->json([
            'user' => $request->user(),
        ]);
    });
    
    // Logout route (revoke the access token)
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Product management routes
    Route::name('products.')->prefix('products')->group(function () {
        Route::get('/', [AdminApiController::class, 'index'])->name('index');          // Fetch all products
        Route::post('/', [AdminApiController::class, 'store'])->name('store');         // Create a new product
        Route::get('/{id}', [AdminApiController::class, 'show'])->name('show');        // Fetch a specific product
        Route::put('/{id}', [AdminApiController::class, 'update'])->name('update');    // Update a specific product
        Route::delete('/{id}', [AdminApiController::class, 'destroy'])->name('destroy'); // Delete a specific product
        Route::get('/search', [AdminApiController::class, 'search'])->name('search');  // Search for products
    });
});

