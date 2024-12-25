<?php

use App\Http\Controllers\Api\AdminApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('products', [AdminApiController::class, 'index']);
    Route::post('products', [AdminApiController::class, 'store']);
    Route::get('products/{id}', [AdminApiController::class, 'show']);
    Route::put('products/{id}', [AdminApiController::class, 'update']);
    Route::delete('products/{id}', [AdminApiController::class, 'destroy']);
    Route::get('search', [AdminApiController::class, 'search']);
});
