<?php

use App\Http\Controllers\Api\AdminApiController;
use Illuminate\Support\Facades\Route;

// Group routes with a common prefix and middleware if necessary
Route::prefix('products')->group(function () {
    Route::get('/', [AdminApiController::class, 'index']);          // Fetch all products
    Route::post('/', [AdminApiController::class, 'store']);         // Create a new product
    Route::get('/{id}', [AdminApiController::class, 'show']);       // Fetch a specific product
    Route::put('/{id}', [AdminApiController::class, 'update']);     // Update a specific product
    Route::delete('/{id}', [AdminApiController::class, 'destroy']); // Delete a specific product
    Route::get('/search', [AdminApiController::class, 'search']);   // Search for products
});
