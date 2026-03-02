<?php

use App\Http\Controllers\BuyerRfqController;
use App\Http\Controllers\FrontproductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RfqController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/ilogin', function () {
    return view('init_login');
})->name('init.login');

Route::get('/ireg', function () {
    return view('init_reg');
})->name('init.reg');

Route::resource('/', HomeController::class);

Route::resource('prod', FrontproductController::class);

// --------------------- Seller Guest Routes ---------------------
Route::middleware('guest:seller')->prefix('seller')->group(function () {

    Route::get('login', [SellerController::class, 'showLoginForm'])->name('seller.login');
    Route::post('login', [SellerController::class, 'login'])->name('seller.login.submit');

    Route::get('register', [App\Http\Controllers\Auth\Seller\RegisterController::class, 'create'])->name('seller.register');
    Route::post('register', [App\Http\Controllers\Auth\Seller\RegisterController::class, 'store']);
});

// --------------------- Seller Auth Routes ---------------------
Route::middleware('auth:seller')->prefix('seller')->group(function () {

    Route::post('logout', [SellerController::class, 'logout'])->name('seller.logout');

    Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');

    // Seller product routes
    Route::resource('product', ProductController::class);

    Route::get('/seller/rfqs', [RfqController::class, 'sellerIndex'])->name('seller.rfqs');

    Route::get('rfq/{rfq}/reply', [RfqController::class, 'replyForm'])
        ->name('seller.rfq.reply.form');

    Route::post('rfq/{rfq}/reply', [RfqController::class, 'submitReply'])
        ->name('seller.rfq.reply.submit');

    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'sellerOrders'])->name('seller.orders');
    Route::post('/orders/{order}/status', [App\Http\Controllers\OrderController::class, 'updateSellerOrderStatus'])->name('seller.orders.status');
});

// --------------------- Admin Seller Management ---------------------
Route::middleware('auth:web')->group(function () {
    Route::resource('seller', SellerController::class); // Admin CRUD
    Route::post('/seller/status-update', [SellerController::class, 'statusUpdate'])
        ->name('seller.status.update');
});

// --------------------- Admin Product Management ---------------------
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('products', [ProductController::class, 'adminIndex'])->name('admin.products');
    Route::post('product/verify/{id}', [ProductController::class, 'verify'])
        ->name('admin.product.verify');
});

// --------------------- Buyer Routes (unchanged) ---------------------
Route::middleware('guest:buyer')->prefix('buyer')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Buyer\LoginController::class, 'create'])->name('buyer.login');
    Route::post('login', [App\Http\Controllers\Auth\Buyer\LoginController::class, 'store']);

    Route::get('register', [App\Http\Controllers\Auth\Buyer\RegisterController::class, 'create'])->name('buyer.register');
    Route::post('register', [App\Http\Controllers\Auth\Buyer\RegisterController::class, 'store']);
});

Route::middleware('auth:buyer')->prefix('buyer')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Buyer\LoginController::class, 'destroy'])->name('buyer.logout');

    Route::view('/dashboard', 'buyer_dashboard');
});

// --------------------- Admin Profile Routes ---------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// RFQ routes
Route::middleware('auth:buyer')->group(function () {

    Route::get('/rfq/{product}', [RfqController::class, 'create'])->name('rfq.create');
    Route::post('/rfq', [RfqController::class, 'store'])->name('rfq.submit');

    Route::get('/order/create/{product}', [OrderController::class, 'create'])
        ->name('order.create');
    Route::post('/order/store', [OrderController::class, 'store'])
        ->name('order.store');
});
Route::get('/rfqs', [RfqController::class, 'index'])->name('rfq.index');


Route::middleware('auth:buyer')->group(function () {
    Route::get('buyer/rfq', [BuyerRfqController::class, 'index'])->name('buyer.rfq');
    Route::post('buyer/rfq/respond/{reply}', [BuyerRfqController::class, 'respond'])->name('buyer.rfq.respond');
});

Route::middleware('auth:buyer')->group(function () {
    Route::get('/buyer/orders', [OrderController::class, 'buyerIndex'])->name('buyer.orders');
});
require __DIR__ . '/auth.php';
