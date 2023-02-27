<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
})->name('home');

Route::get('/create', function () {
    return view('create.create');
})->name('create');

Route::get('/create-product', function () {
    return view('create.createProduct');
})->name('create-product');

Route::get('/product', function () {
    return view('store-product.product');
})->name('product');

Route::get('/edit', function () {
    return view('update.edit');
})->name('edit');

Route::get('/edit-store', function () {
    return view('update.editStore');
})->name('edit-store');


Route::get('/store', [TiendaController::class,'index'])->name('store');

Route::get('/product', [ProductoController::class,'index'])->name('product');

route::post('/create',[TiendaController::class,'store'])->name('create');

route::post('/create-product',[ProductoController::class,'store'])->name('create-product');

route::get('/create-product',[ProductoController::class,'create'])->name('create-product');

route::get('/edit/{id}',[ProductoController::class,'edit'])->name('edit');

route::get('/edit-store/{id}',[TiendaController::class,'edit'])->name('edit-store');

route::put('/update-store/{id}',[TiendaController::class,'update'])->name('update-store');

route::put('/update/{id}',[ProductoController::class,'update'])->name('update');

route::delete('/destroy/{id}',[ProductoController::class,'destroy'])->name('destroy');
