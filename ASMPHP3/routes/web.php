<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//category
Route::get('/admin', function () {
    return view('templates/layout');
});
Route::get('/category',[App\Http\Controllers\CategoryController::class,'index'])->name('route_category_index');
Route::match(['GET','POST'],'/category/add',[App\Http\Controllers\CategoryController::class,'add'])->name('route_category_add');
Route::match(['GET','POST'],'/category/edit/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('route_category_edit');
Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('route_category_delete');
//khoa_hoc
Route::get('/khoa_hoc',[App\Http\Controllers\Khoa_hocController::class,'index'])->name('route_khoa_hoc_index');
Route::match(['GET','POST'],'/khoa_hoc/add',[App\Http\Controllers\Khoa_hocController::class,'add'])->name('route_khoa_hoc_add');
Route::match(['GET','POST'],'/khoa_hoc/edit/{id}',[App\Http\Controllers\Khoa_hocController::class,'edit'])->name('route_khoa_hoc_edit');
Route::match(['GET','POST'],'/khoa_hoc/delete/{id}',[App\Http\Controllers\Khoa_hocController::class,'delete'])->name('route_khoa_hoc_delete');

