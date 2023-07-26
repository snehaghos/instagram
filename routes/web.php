<?php

use App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('/profile', function () {return view('insta_profile');});
Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::get('/login', function () {return view('ins_login');});
Route::get('/create', function () { return view('create_post');})->name('create');
Route::get('/profile', function () { return view('insta_profile');})->name('profile');

Route::post('/post', function () { return view('create_post');})->name('post.save');
Route::get('/edit/{id}',[ProfileController::class,'edit'])->name('profile.edit');
Route::post('/update/{id}',[ProfileController::class,'update'])->name('profile.update');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.save');
// Route::post('/edit', [EditController::class, 'store'])->name('edit.save');

