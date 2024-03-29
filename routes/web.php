<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\ProductImageController;

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

//dashboard ---------------------------------------
Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::prefix('admin-panel/management')->name('admin.')->group(function(){
    Route::resource('brands',BrandController::class);
    Route::resource('attributes',AttributeController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('tags',TagController::class);
    Route::resource('products',ProductController::class);
    Route::resource('banners',BannerController::class);

    // Get Category Attributes
    Route::get('/category-attributes/{category}' ,[CategoryController::class , 'getCategoryAttributes']);
   
   //edit Product image
   Route::get('/products/{product}/images-edit' ,[ProductImageController::class , 'edit'])->name('products.images.edit');
   Route::delete('/products/{product}/images-destroy' ,[ProductImageController::class , 'destroy'])->name('products.images.destroy');
   Route::put('/products/{product}/images-set-primary' ,[ProductImageController::class , 'setPrimary'])->name('products.images.set_primary');
   Route::post('/products/{product}/images-add' ,[ProductImageController::class , 'add'])->name('products.images.add');
   
   //edit category 
   Route::get('/products/{product}/category-edit' ,[ProductController::class , 'editCategory'])->name('products.category.edit');
   Route::put('/products/{product}/category-update' ,[ProductController::class , 'updateCategory'])->name('products.category.update');
});


Route::get('/',[HomeController::class,'index']);