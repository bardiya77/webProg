<?php

use App\Http\Controllers\Admin\AttributeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;




Route::get('/', function () {
    return view('admin.dashboard');
});

//dashboard ---------------------------------------
Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::prefix('admin-panel/management')->name('admin.')->group(function(){
    Route::resource('brands',BrandController::class);
    Route::resource('attributes',AttributeController::class);
});