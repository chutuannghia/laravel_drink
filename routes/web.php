<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendControllers;

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
Route::get('lienhe',[frontendControllers::class,'LienHe'])->name('lienhe');
Route::get('gioithieu',[frontendControllers::class,'GioiThieu'])->name('gioithieu');

