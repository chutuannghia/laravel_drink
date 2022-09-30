<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendControllers;
use App\Http\Controllers\AuthController;

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

Route::get('',[frontendControllers::class,'TrangChu'])->name('trangchu');
Route::get('sanpham/{id}',[frontendControllers::class,'SanPham'])->name('sanpham');
Route::get('loaisanpham',[frontendControllers::class,'LoaiSanPham'])->name('loaisanpham');
Route::get('loaisanpham/{id}',[frontendControllers::class,'LoaiSanPhamid'])->name('lspid');
Route::get('lienhe',[frontendControllers::class,'LienHe'])->name('lienhe');
Route::get('gioithieu',[frontendControllers::class,'GioiThieu'])->name('gioithieu');
Route::get('Themsanpham/{id}',[frontendControllers::class,'AddToCart'])->name('addtocart');
Route::get('Xoasanpham/{id}',[frontendControllers::class,'RemoveToCart'])->name('removetocart');
Route::get('dathang',[frontendControllers::class,'getOrderItem'])->name('order');
Route::post('dathang',[frontendControllers::class,'postOrderItem']);
Route::get('timkiem',[frontendControllers::class,'getSearch'])->name('search');

Route::group(['prefix'=>'auth'],function(){
    Route::get('register',[AuthController::class,'getRegister'])->name('register');
    Route::post('register',[AuthController::class,'postRegister']);
    Route::get('login',[AuthController::class,'getLogin'])->name('login');
    Route::post('login',[AuthController::class,'postLogin']);
    Route::get('logout',[AuthController::class,'Logout'])->name('logout');
    Route::get('logout',[AuthController::class,'Logout'])->name('logout');

});

//login social
//github
Route::get('/auth/github/redirect' ,[AuthController::class, 'githubredirect'])->name('githublogin');

Route::get('/auth/github/callback', [AuthController::class, 'githubcallback']);

// google

Route::get('/auth/google/redirect' ,[AuthController::class, 'googleredirect'])->name('googlelogin');

Route::get('/auth/google/callback', [AuthController::class, 'googlecallback']);


