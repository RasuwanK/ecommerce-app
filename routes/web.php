<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\buyer\auth\AuthController as AuthAuthController;
use App\Http\Controllers\buyer\auth\ForgotResetController;
use App\Http\Controllers\buyer\auth\LoginController;
use App\Http\Controllers\buyer\auth\OTPController;
use App\Http\Controllers\buyer\auth\RegisterController;
use App\Http\Controllers\buyer\CartController;
use App\Http\Controllers\buyer\CommonController;
use App\Http\Controllers\buyer\LandController;
use App\Http\Controllers\buyer\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandController::class, 'index'])->name('buyer.home');

Route::get('/logout', [AuthAuthController::class, 'logout'])->name('buyer.logout');

Route::get('/auth/user', [AuthAuthController::class, 'auth'])->name('buyer.auth');

Route::get('/login', [LoginController::class, 'index'])->name('buyer.login.form');

Route::post('/login', [LoginController::class, 'login'])->name('buyer.login');

Route::get('/otp', [OTPController::class, 'index'])->name('buyer.otp.form');

Route::post('/otp', [OTPController::class, 'verifyOtp'])->name('buyer.otp');

Route::get('/register',[RegisterController::class, 'index'])->name('buyer.register.form');

Route::post('/register',[RegisterController::class, 'register'])->name('buyer.register');

Route::get('/forgotpassword', [ForgotResetController::class, 'resetIndex']);

Route::get('/resetpassword', [ForgotResetController::class, 'forgotIndex']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.view');

Route::get('/cart', [CartController::class, 'index']);

Route::get('/about', [CommonController::class, 'aboutIndex']);

Route::get('/contact', [CommonController::class, 'contactIndex']);


Route::prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'defaultAuth']);    

    Route::get('/seller/signup', [AuthController::class, 'sellerSignUp'])->name('seller.signup');

    Route::post('/seller/signup', [SellerController::class, 'store'])->name('seller.store');
    
    Route::get('/buyer/signup', [AuthController::class, 'buyerSignUp'])->name('buyer.signup');

    Route::post('/buyer/signup', [UserController::class, 'store'])->name('buyer.store');
    
    Route::get('/signin', [AuthController::class, 'siginIn'])->name('signin');
});