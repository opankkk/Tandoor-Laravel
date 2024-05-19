<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
  return view('home');
});
Route::get('/about', function () {
  return view('about');
});
Route::get(
  '/Login',
  [LoginController::class, 'index']
)->middleware('guest');

Route::get('/orders', function () {
  return view('orders');
})->middleware('auth');

Route::resource('/Profile', ProfileController::class)->middleware('auth');

Route::post(
  '/login',
  [LoginController::class, 'authenticate']
);
Route::post(
  '/logout',
  [LoginController::class, 'logout']
);

Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::resource('/Products', ProdukController::class)
  ->middleware(('auth'));

Route::get(
  '/Member',
  [RegisterController::class, 'index']
)->middleware('guest');

Route::post(
  '/simpan',
  [RegisterController::class, 'store']
);
Route::get('/dashboard', function () {
  return view('dashboard.index');
})->middleware('auth');

Route::get('/orders/{productId}', [OrdersController::class, 'add'])->name('orders.add');
Route::delete('/dashboard/posts/{produk}', [DashboardPostController::class, 'destroy']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/orders', OrdersController::class)->middleware('auth');


Route::get('/dashboard/posts/{id}/edit', [DashboardPostController::class, 'edit']);

Route::post('/dashboard/posts/{produk}', [DashboardPostController::class, 'update']);


Route::get('/dashboard/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::delete('/dashboard/orders/{order}', [OrdersController::class, 'destroy'])->name('orders.destroy');


  
// Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
