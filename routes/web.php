<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\CiriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// home
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::resource('ciri', CiriController::class);

// ciri

// Route::get('/',[UserController::class,'index'])->name('pengguna.index');
Route::get('/users/check/index',[CheckController::class,'index'])->name('users.check.index');