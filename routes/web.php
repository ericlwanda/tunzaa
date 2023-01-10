<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\POSController;



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


Route::get('/',[POSController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');



//cart

Route::get('cart', [POSController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [POSController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [POSController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [POSController::class, 'remove'])->name('remove.from.cart');
Route::post('store', [POSController::class, 'store'])->name('store.cart');


Route::middleware('auth:web')->group(function(){
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('pos', [POSController::class,  'pos'])->name('pos');



Route::get('/orders',[PageController::class, 'orders'])->name('orders');

// Products
Route::get('/products',[ProductController::class, 'index'])->name('products');
Route::get('/products/show/{id}',[ProductController::class, 'show'])->name('products.show');
Route::post('/products/store',[ProductController::class, 'store'])->name('products.store');
Route::post('/products/update/{id}',[ProductController::class, 'update'])->name('products.update');
Route::post('/products/destroy/{id}',[ProductController::class, 'destroy'])->name('products.destroy');





Route::get('logout', [AuthController::class, 'signOut'])->name('logout');
});