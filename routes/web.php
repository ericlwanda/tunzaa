<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


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

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 


Route::middleware('auth:web')->group(function(){
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('/blank',[PageController::class, 'blank'])->name('blank');

Route::get('/form',[PageController::class, 'form'])->name('form');

// Products
Route::get('/products',[ProductController::class, 'index'])->name('products');
Route::post('/products/store',[ProductController::class, 'store'])->name('products.store');
Route::get('logout', [AuthController::class, 'signOut'])->name('logout');
});