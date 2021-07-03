<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'master']);

Route::get('/admin', [AdminController::class, 'index']);
Route::resource('admin', AdminController::class);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::get('/hapus/{id}', [AdminController::class, 'destroy']);

