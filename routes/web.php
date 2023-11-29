<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UsersDataController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RawController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

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
    return Inertia::render('Login');
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

    Route::get('/coupons', [CouponsController::class, 'allCoupons']);
    Route::get('/coupons/create-coupon', [CouponsController::class, 'createCoupon']);
    Route::get('/coupons/modify-coupons-information/{id}', [CouponsController::class, 'modifyInformation']);
    Route::get('/coupons/delete-coupon/{id}', [CouponsController::class, 'deleteInformation']);

    Route::get('/products', [ProductsController::class, 'allProducts']);
    Route::get('/products/create-product/', [ProductsController::class, 'createProduct']);
    Route::get('/products/detailed-product-information/{id}', [ProductsController::class, 'detailedInformation']);
    Route::get('/products/modify-product-information/{id}', [ProductsController::class, 'modifyInformation']);
    Route::get('/products/delete-product/{id}', [ProductsController::class, 'deleteInformation']);

    //Route::resource('categories', CategoryController::class);
    Route::get('/categories/', [CategoriesController::class, 'allCategories']);
    Route::get('/categories/create-category/', [CategoriesController::class, 'createCategory']);
    Route::get('/categories/detailed-category-information/{id}', [CategoriesController::class, 'detailedInformation']);
    Route::get('/categories/modify-category-information/{id}', [CategoriesController::class, 'modifyInformation']);

    Route::get('/raw', [RawController::class, 'allRaw']);
    Route::get('/raw/create-raw/', [RawController::class, 'createRaw']);
    Route::get('/raw/detailed-raw-information/{id}', [RawController::class, 'detailedInformation']);
    Route::get('/raw/modify-raw-information/{id}', [RawController::class, 'modifyInformation']);

    Route::get('/inventory', function () {return Inertia::render('Maintenance');});
    Route::get('/inventory/inventory-category/', [CategoriesController::class, 'createCategory']);
    Route::get('/inventory/detailed-inventory-information/{id}', [CategoriesController::class, 'detailedInformation']);
    Route::get('/inventory/modify-inventory-information/{id}', [CategoriesController::class, 'modifyInformation']);

    Route::get('/brand', [BrandController::class, 'allBrand']);
    Route::get('/brand/create-brand/', [BrandController::class, 'createBrand']);
    Route::get('/brand/modify-brand-information/{id}', [BrandController::class, 'modifyInformation']);

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
