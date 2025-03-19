<?php

use App\Http\Controllers\PropertyController;

Route::get('/properties/create', [PropertyController::class, 'create']);
Route::post('/properties', [PropertyController::class, 'store']);
Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/properties/{property}', [PropertyController::class, 'show']);
Route::get('/properties/{id}', [PropertyController::class, 'show'])->where('id', '[0-9]+');