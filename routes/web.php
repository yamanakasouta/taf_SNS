<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
    Route::get('/posts/create','create')->name('posts.create');//メニュー登録
    Route::post('/posts/{id}/store','store')->name('posts.store');//メニュー登録処理
    Route::get('/posts/practice', 'practice')->name('posts.practice');
    Route::get('/posts/{id}/edit','edit')->name('posts.edit');//練習メニュー編集
    Route::post('/posts/{id}/delete','delete')->name('posts.delete');//削除処理
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';