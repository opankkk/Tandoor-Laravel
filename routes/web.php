<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/Login', [LoginController::class, 'index']
) ->middleware('guest'); 

Route::post('/login', [LoginController::class, 'authenticate']
);
Route::post('/logout', [LoginController::class, 'logout']
);
Route::get('/Member', [RegisterController::class, 'index']
)-> middleware('guest');

Route::post('/simpan', [RegisterController::class, 'store']
);
Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
-> middleware(('auth'));
// Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
