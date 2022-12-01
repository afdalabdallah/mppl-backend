<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
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
})->name('dashboard');

Route::get('/catalog/{category}', [CatalogController::class, 'viewCatalog']);
Route::get('/catalog', [CatalogController::class, 'viewAllCatalog']);

Route::get('/item/{id}', [DetailController::class, 'viewDetail']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/insert', [PakaianController::class, 'viewCreate']);
    Route::post('/insert', [PakaianController::class, 'insertPakaian']);
    Route::get('/cart', [CartController::class, 'getCartData']);
    Route::post('/cart/insert/{id}', [CartController::class, 'insertCart']);
    Route::post('/cart/delete/{id}', [CartController::class, 'deleteCart']);
    Route::post('/cart/update/add/{id}', [CartController::class, 'updateCart']);
    Route::post('/cart/update/subtract/{id}', [CartController::class, 'subtractCart']);

    Route::get('/checkout', [CheckoutController::class, 'getCheckoutData']);
    Route::post('/payment', [CheckoutController::class, 'updateAddress']);
    Route::get('/review', [CheckoutController::class, 'getReview']);

    Route::get('/order', [OrderController::class, 'getOrderData']);
    Route::get('/order_finish', [OrderController::class, 'orderFinish']);
    Route::post('/place_order', [OrderController::class, 'insertOrder']);
    Route::get('/detail_order/{id}', [OrderController::class, 'getOrderDetail']);
});


require __DIR__ . '/auth.php';
