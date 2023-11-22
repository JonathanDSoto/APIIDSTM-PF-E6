<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UsersDataController;
use App\Http\Controllers\CouponsController;

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
    return Inertia::render('Index');
});

Route::get('/logint', function () {
        return Inertia::render('Login');
});
Route::get('/forgotpassword', function () {
    return Inertia::render('Login');
});

Route::get('/users', [UsersDataController::class, 'allUsers']);
Route::get('/users/create-user', [UsersDataController::class, 'createUser']);
Route::get('/users/detailed-information/{id}', [UsersDataController::class, 'detailedInformation']);
Route::get('/users/modify-information/{id}', [UsersDataController::class, 'modifyInformation']);
Route::get('/users/delete-user/{id}', [UsersDataController::class, 'deleteInformation']);

Route::get('/coupons', [CouponsController::class, 'allCoupons']);
Route::get('/coupons/create-coupon', [CouponsController::class, 'createCoupon']);
Route::get('/coupons/modify-coupons-information/{id}', [CouponsController::class, 'modifyInformation']);
Route::get('/coupons/delete-coupon/{id}', [CouponsController::class, 'deleteInformation']);

Route::get('/categories', function () {return Inertia::render('Categories');});

Route::get('/products', function () {
    return Inertia::render('Products');
});

Route::get('/shipment', function () {
    return Inertia::render('Shipment');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/{any}', function () {
    return Inertia::render('UrlError'); 
})->where('any', '.*');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
