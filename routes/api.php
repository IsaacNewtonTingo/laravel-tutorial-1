<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middlware' => ['auth:sanctum']], function () {
    Route::get('/products/search/{name}', [ProductController::class, 'search']);

    Route::resource('products', ProductController::class);

    Route::get('/users', [UserController::class, 'index']);

});