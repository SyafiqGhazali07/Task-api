<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MobilController;

Route::get('/mobil', [MobilController::class, 'index']);
Route::post('/mobil', [MobilController::class, 'store']);
Route::get('/mobil/{id}', [MobilController::class, 'show']);
Route::put('/mobil/{id}', [MobilController::class, 'update']);
Route::patch('/mobil/{id}', [MobilController::class, 'update']);
Route::delete('/mobil/{id}', [MobilController::class, 'destroy']);
