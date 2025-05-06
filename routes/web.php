<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class,'index'])->name('dashboard');

Route::get('/login',[PageController::class,'login'])->name('login');

Route::post('/login',[PageController::class,'login'])->name('login');

Route::get('/pengelolaan',[PageController::class,'pengelolaan'])->name('pengelolaan');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/logout',[PageController::class,'logout'])->name('logout');