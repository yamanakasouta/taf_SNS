<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageTestController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect('/login');
});

Route::middleware(['auth','verified'])->group(function(){
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
  
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/posts/{id}/detail','detail')->name('posts.detail');//練習メニュー詳細
    Route::get('/posts', 'profile')->name('profile');
    Route::get('/practice', 'practice')->name('practice');//練習メニュー一覧
    Route::get('/posts/create/{id?}','create')->name('posts.create');//メニュー登録
    Route::post('/posts/store/{id?}','store')->name('posts.store');//メニュー登録処理
    Route::get('/posts/practice', 'practice')->name('posts.practice');
    Route::get('/posts/{id}/edit','edit')->name('posts.edit');//練習メニュー編集
    Route::post('/posts/{id}/delete','delete')->name('posts.delete');//削除処理

    Route::get('/posts/register','register')->name('posts.register');
    Route::get('/posts/profile','profile')->name('posts.profile');
    Route::post('/posts/update','update')->name('posts.update'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/image_test', [ImageTestController::class, 'index'])->name('image_test');
Route::post('/image_test', [ImageTestController::class, 'imagePost'])->name('image_test_post');

require __DIR__.'/auth.php';