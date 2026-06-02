<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;




Route::get('/home', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin/add-destination', function () {
    return view('admin.add-destination');
});

Route::post('/contact', [ContactController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin/messages', [AdminController::class, 'messages']);

Route::get('/admin/destination', [DestinationController::class, 'index']);

Route::get('/admin/destination/create', [DestinationController::class, 'create']);

Route::post('/admin/destination/store', [DestinationController::class, 'store']);
Route::get('/admin/destination/edit/{id}', [DestinationController::class, 'edit']);
Route::post('/admin/destination/update/{id}', [DestinationController::class, 'update']);

Route::delete('/admin/destination/delete/{id}', [DestinationController::class, 'destroy']);


// Public
Route::get('/packages', [PackageController::class,'index']);

// Admin
Route::get('/admin/packages', [PackageController::class,'adminIndex']);
Route::get('/admin/packages/create', [PackageController::class,'create']);
Route::post('/admin/packages/store', [PackageController::class,'store']);