<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PengembalianController;
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

// Route admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/insert', [PakaianController::class, 'viewCreate']);
    Route::post('/admin/insert', [PakaianController::class, 'insertPakaian']);

    Route::get('/admin/order', [OrderController::class, 'getAllOrder']);
    Route::get('/admin/order/detail/{id}', [OrderController::class, 'getOrderDetailAdmin']);
    Route::get('/admin/order/edit/{id}', [OrderController::class, 'viewEdit']);
    Route::post('/admin/order/update/{id}', [OrderController::class, 'updateStatus']);


    Route::get('/admin/user', [ProfileController::class, 'getAllUser']);
    Route::get('/admin/user/detail/{id}', [ProfileController::class, 'getUserAdmin']);
    Route::post('/admin/user/accept/{id}', [ProfileController::class, 'acceptVerify']);
    Route::post('/admin/user/reject/{id}', [ProfileController::class, 'rejectVerify']);

    Route::get('/admin/item', [PakaianController::class, 'getAllPakaian']);

    Route::get('/admin/return', [PengembalianController::class, 'getAllPengembalian']);
    Route::get('/admin/return/edit/{id}', [PengembalianController::class, 'viewEdit']);
    Route::get('/admin/return/reject/{id}', [PengembalianController::class, 'viewReject']);
    Route::post('/admin/return/update/{id}', [PengembalianController::class, 'updateStatus']);
    Route::get('/admin/return/detail/{id}', [PengembalianController::class, 'getDetailAdminPengembalian']);
    Route::post('/admin/return/reject/{id}', [PengembalianController::class, 'deletePengembalian']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/verify', [ProfileController::class, 'updateStatus']);

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

    Route::get('/pengembalian', [PengembalianController::class, 'getPengembalian']);
    Route::get('/pengembalian_detail/{id}', [PengembalianController::class, 'getPengembalianDetail']);
    Route::get('/pengembalian/form', [PengembalianController::class, 'viewForm']);
    Route::get('/pengembalian/edit', [PengembalianController::class, 'viewEditForm']);
    Route::post('/pengembalian/update', [PengembalianController::class, 'updatePengembalian']);
    Route::post('/pengembalian/insert', [PengembalianController::class, 'insertPengembalian']);
});


require __DIR__ . '/auth.php';
