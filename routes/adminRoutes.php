<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->group(function () {
    Auth::routes(['verify'=>true]);
});

Route::group(['prefix' => 'admin',  'middleware' => ['verified']], function(){
    //post
    Route::get('posts',[PostController::class,'index'])->name('posts');
    Route::get('addPost',[PostController::class,'create'])->name('addPost');
    Route::post('storePost',[PostController::class,'store'])->name('storePost');
    Route::get('showPost/{id}',[PostController::class,'show'])->name('showPost');
    Route::get('editPost/{id}',[PostController::class,'edit'])->name('editPost');
    Route::put('updatePost/{id}',[PostController::class,'update'])->name('updatePost');
    Route::get('deletePost/{id}',[PostController::class,'destroy'])->name('deletePost');

    //user
    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('addUser',[UserController::class,'create'])->name('addUser');
    Route::post('storeUser',[UserController::class,'store'])->name('storeUser');
    Route::get('editUser/{id}',[UserController::class,'edit'])->name('editUser');
    Route::put('updateUser/{id}',[UserController::class,'update'])->name('updateUser');

});