<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/', [CategoryController::class, 'index'])->name('category.index');

});
