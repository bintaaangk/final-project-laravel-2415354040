<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Routes Service
Route::apiResource("services", ServiceController::class);
Route::patch("services/{service}/activate", [ServiceController::class, "activate"]);
Route::patch("services/{service}/deactivate", [ServiceController::class, "deactivate"]);

// Routes Customer
Route::apiResource("customers", CustomerController::class);