<?php

use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'admin']);
Route::get('addProduct', [\App\Http\Controllers\AdminController::class, 'addProduct']);
Route::get('products', [\App\Http\Controllers\AdminController::class, 'product']);
Route::post('storeProduct', [\App\Http\Controllers\AdminController::class, 'storeProduct']);
Route::get('deleteProduct/{id}', [\App\Http\Controllers\AdminController::class, 'deleteProduct']);
Route::get('editProduct/{id}', [\App\Http\Controllers\AdminController::class, 'editProduct']);
Route::post('eProduct', [\App\Http\Controllers\AdminController::class, 'eProduct']);

Route::get('/', [\App\Http\Controllers\ClientController::class, 'index']);
Route::get('shop', [\App\Http\Controllers\ClientController::class, 'shop']);
Route::get('cart', [\App\Http\Controllers\ClientController::class, 'cart']);
Route::get('cartReduceByOne/{id}', [\App\Http\Controllers\ClientController::class, 'getReduceByOne']);
Route::get('addByOne/{id}', [\App\Http\Controllers\ClientController::class, 'addByOne']);
Route::get('cartRemove/{id}', [ClientController::class, 'removeItem']);
Route::get('checkout', [ClientController::class, 'checkout']);
Route::get('about', [ClientController::class, 'about']);
Route::post('search', [ClientController::class, 'search']);
Route::post('storeCart', [ClientController::class, 'storeCart'])->name('storeCart');

Route::get('productDetail/{id}', [\App\Http\Controllers\ClientController::class, 'productDetail']);
Route::get('productD', [\App\Http\Controllers\ClientController::class, 'productD']);
Route::get('profile', [\App\Http\Controllers\ClientController::class, 'profile']);
Route::post('reg', [\App\Http\Controllers\AuthController::class, 'reg']);
Route::post('log', [\App\Http\Controllers\AuthController::class, 'log']);
Route::post('updateProfile', [\App\Http\Controllers\AuthController::class, 'updateProfile']);
Route::post('placeOrder', [\App\Http\Controllers\AdminController::class, 'placeOrder']);
