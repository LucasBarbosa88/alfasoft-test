<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/create', [ContactController::class, 'create'])->name('create');
Route::get('/contact/{ID}', [ContactController::class, 'show'])->name('show');
Route::post('contact/create', [ContactController::class, 'store'])->name('store');
Route::get('contact/edit/{ID}', [ContactController::class, 'edit'])->name('edit');
Route::post('contact/update', [ContactController::class, 'update'])->name('update');
Route::get('contact/delete/{ID}', [ContactController::class, 'delete'])->name('delete');
