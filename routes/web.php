<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;

Route::get('/', function(){
    return view('welcome');
});
Route::resource('category', CategoryController::class);
Route::resource('item', ItemController::class);
Route::resource('transaction', TransactionController::class);