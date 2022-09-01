<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/inovices', [App\Http\Controllers\CanterController::class, 'index'])->name('home/inovices');
Route::get('home/Sections', [App\Http\Controllers\SectionsController::class, 'index'])->name('home/Sections');
Route::get('Products', [App\Http\Controllers\ProductsController::class, 'index'])->name('Products');
Route::post('sections/store', [App\Http\Controllers\SectionsController::class, 'store'])->name('sections/store');
Route::post('sections/update', [App\Http\Controllers\SectionsController::class, 'update'])->name('sections/update');
Route::post('sections/destroy', [App\Http\Controllers\SectionsController::class, 'destroy'])->name('sections/destroy');
Route::get('/{page}', [AdminController::class,'index']);

