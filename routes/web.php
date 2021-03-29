<?php

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

Auth::routes();

// Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produk', function () {
    return view('admin.product');
});

Route::get('/voucher', function () {
    return view('admin.voucher');
});

// Merchant
Route::get('/merchant-home', function () {
    return view('merchant.home');
});
Route::get('/merchant-signup', function() {
    return view('merchant.signup');
});
//Super Admin
Route::get('/super-index', function () {
    return view('superAdmin.index');
});

Route::get('/super-admin', function() {
    return view('superAdmin.admin');
});
Route::get('/super-merchant', function() {
    return view('superAdmin.merchant');
});
Route::get('/super-user', function() {
    return view('superAdmin.user');
});
Route::get('/super-produk', function() {
    return view('superAdmin.product');
});
Route::get('/super-voucher', function() {
    return view('superAdmin.voucher');
});