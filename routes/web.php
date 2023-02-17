<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CatatanPerjalananController;

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

Route::get('/', [CatatanPerjalananController::class, 'home']);
Route::get('/catatan_perjalanan', [CatatanPerjalananController::class, 'catatan']);
Route::get('/catatan_perjalanan_json', [CatatanPerjalananController::class, 'json'])->name('json');
Route::get('/tambah', [CatatanPerjalananController::class, 'create'])->name('create');
Route::post('/tambah', [CatatanPerjalananController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
