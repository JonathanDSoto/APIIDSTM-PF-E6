<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UsersDataController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RawController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CouponController;

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
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
    return Inertia::render('Auth/Login');
});

Route::get('/forgotpassword', function () {return Inertia::render('ForgotPassword');});
Route::get('/signup', function () {return Inertia::render('SignUp');});

Route::middleware('auth')->group(function () {
    Route::get('/index', function () {return Inertia::render('Index');});

    Route::get('/users', [UsersDataController::class, 'allUsers']);
    Route::get('/users/create-user', [UsersDataController::class, 'createUser']);
    Route::get('/users/detailed-information/{id}', [UsersDataController::class, 'detailedInformation']);
    Route::get('/users/modify-information/{id}', [UsersDataController::class, 'modifyInformation']);
    Route::get('/users/delete-user/{id}', [UsersDataController::class, 'deleteInformation']);

    Route::resource('customers', CustomerController::class);
    Route::resource('coupons', CouponController::class);


    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);

    Route::get('/order', [OrderController::class, 'allOrders']);
    Route::get('/order/create-order/', [OrderController::class, 'createOrder']);
    Route::get('/order/modify-order-information/{id}', [OrderController::class, 'modifyInformation']);

});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return Inertia::render('UrlError');
})->where('any', '.*');
