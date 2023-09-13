<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;



Route::resource('/admin/photos', PhotoController::class);
Route::resource('/admin/galleries', GalleryController::class);

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});
