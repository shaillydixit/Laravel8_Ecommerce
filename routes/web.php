<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubSubCategoryController;
// use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Backend\ProductController;

// Route::get('test', function () {
//     Log::info('test');
//     echo 'done';
// });

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('all/category', [CategoryController::class, 'AllCategory'])->name('all.category');

Route::post('store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');

Route::get('edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');

Route::post('update/category/{id}', [CategoryController::class, 'UpdateCategory'])->name('update.category');

Route::get('delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');


Route::get('all/brand', [BrandController::class, 'AllBrand'])->name('all.brand');

Route::post('store/brand', [BrandController::class, 'StoreBrand'])->name('store.brand');

Route::get('edit/brand/{id}', [BrandController::class, 'EditBrand'])->name('edit.brand');

Route::post('update/brand/{id}', [BrandController::class, 'UpdateBrand'])->name('update.brand');

Route::get('delete/brand/{id}', [BrandController::class, 'DeleteBrand'])->name('delete.brand');


Route::get('all/subcategory', [SubCategoryController::class, 'AllSubCategory'])->name('all.subcategory');

Route::post('store/subcategory', [SubCategoryController::class, 'StoreSubCategory'])->name('store.subcategory');

Route::get('edit/subcategory/{id}', [SubCategoryController::class, 'EditSubCategory'])->name('edit.subcategory');

Route::post('update/subcategory/{id}', [SubCategoryController::class, 'UpdateSubCategory'])->name('update.subcategory');

Route::get('delete/subcategory/{id}', [SubCategoryController::class, 'DeleteSubCategory'])->name('delete.subcategory');


Route::get('all/subsubcategory', [SubSubCategoryController::class, 'AllSubSubCategory'])->name('all.subsubcategory');

Route::get('/category/subcategory/ajax/{category_id}', [SubSubCategoryController::class, 'GetSubCategory']);

Route::get('/category/subsubcategory/ajax/{subcategory_id}', [SubSubCategoryController::class, 'GetSubSubCategory']);

Route::post('store/subsubcategory', [SubSubCategoryController::class, 'StoreSubSubCategory'])->name('store.subsubcategory');

Route::get('edit/subsubcategory/{id}', [SubSubCategoryController::class, 'EditSubSubCategory'])->name('edit.subsubcategory');

Route::post('update/subsubcategory/{id}', [SubSubCategoryController::class, 'UpdateSubSubCategory'])->name('update.subsubcategory');

Route::get('delete/subsubcategory/{id}', [SubSubCategoryController::class, 'DeleteSubSubCategory'])->name('delete.subsubcategory');


Route::get('add/product', [ProductController::class, 'AddProduct'])->name('add.product');

Route::post('store/product', [ProductController::class, 'StoreProduct'])->name('store.product');

Route::get('/product/category/brand/ajax/{category_id}', [ProductController::class, 'GetBrand']);

Route::get('manage/product', [ProductController::class, 'ManageProduct'])->name('manage.product');

Route::get('edit/product/{id}', [ProductController::class, 'EditProduct'])->name('edit.product');

Route::get('update/product/{id}', [ProductController::class, 'UpdateProduct'])->name('update.product');

Route::get('delete/product/{id}', [ProductController::class, 'DeleteProduct'])->name('delete.product');
