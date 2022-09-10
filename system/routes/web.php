<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomenAdminController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\UserController;

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
 
//admin
Route::resource('user', UserController::class);
Route::get('beranda', [HomeController::class, 'showBeranda']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::resource('Beranda', BerandaController::class);
Route::resource('komen', KomenAdminController::class);

Route::prefix('admin')->middleware('auth')->group(function () {
  
    Route::resource('artikel', ArtikelController::class);
    
   
});

//home

Route::get('/', [HomeController::class, 'showHome']);
Route::get('artikel', [HomeController::class, 'showArtikel']);
Route::get('home', [HomeController::class, 'showHome']);
Route::post('artikel/{artikel}', [KomenController::class, 'store']);
Route::get('artikel/{artikel}', [HomeController::class, 'showArtikel']);