<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShippingCompanyController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Auth/Login');
});

//Route::get('/forgotpassword', function () {
//    return Inertia::render('ForgotPassword');
//});

//Route::get('/signup', function () {
//    return Inertia::render('SignUp');
//});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Index');
    });

    Route::resource('customers', CustomerController::class);
    Route::resource('coupons', CouponController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('shipping-companies', ShippingCompanyController::class);
    Route::resource('shipments', ShipmentController::class);
});

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return Inertia::render('UrlError');
})->where('any', '.*');
