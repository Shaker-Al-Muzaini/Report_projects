<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CanterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('home/inovices', [CanterController::class, 'index'])->name('home/inovices');
Route::get('home/Sections', [SectionsController::class, 'index'])->name('home/Sections');
Route::post('sections/store', [SectionsController::class, 'store'])->name('sections/store');
Route::post('sections/update', [SectionsController::class, 'update'])->name('sections/update');
Route::post('sections/destroy', [SectionsController::class, 'destroy'])->name('sections/destroy');

Route::get('Products', [ProductsController::class, 'index'])->name('Products');
Route::post('Products/store', [ProductsController::class, 'store'])->name('Products/store');
Route::Post('Products/update',[ProductsController::class,'update'])->name('Products/update');
Route::post('Products/destroy', [ProductsController::class, 'destroy'])->name('sections/destroy');

Route::get('/{page}', [AdminController::class,'index']);


