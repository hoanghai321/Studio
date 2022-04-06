<?php

use App\Http\Controllers\Admin\AdminBillsAnhCuoi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AnhCuoiController;
use App\Http\Controllers\User\AoCuoiController;
use App\Http\Controllers\User\Bills\BillsAnhCuoiController;
use App\Http\Controllers\User\Bills\BillsAoCuoiController;
use App\Http\Controllers\User\CartAnhCuoiController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HistoryCart;
use App\Http\Controllers\User\Test;
use App\Http\Controllers\Admin\AdminBillsAoCuoi;

//Default
Route::get('/', function() {return view('user.Index');})->name('home');
Auth::routes();

//user 
Route::get('/', [HomeUserController::class, 'index'])->name('User');
Route::resource('/home', HomeController::class)->middleware('role:2');

//Áo cưới
Route::get('/aocuoi', [AoCuoiController::class, 'index'])->name('aocuoi');
Route::get('/aocuoi/{id}', [AoCuoiController::class, 'aocuoiById'])->name('aocuoiById');

//Ảnh cưới
Route::get('/anhcuoi', [AnhCuoiController::class,'index'])->name('anhcuoi');
Route::get('/anhcuoi/{id}', [AnhCuoiController::class, 'anhcuoiById'])->name('anhcuoiById');

//Giỏ hàng áo cưới
Route::get('/cart', [CartController::class, 'view'])->name('cart');
Route::get('/cartaocuoi/{id}', [CartController::class, 'AddCart'])->name('AddCartAoCuoi');
Route::get('/DeleteCartAoCuoi/{id}', [CartController::class, 'DeleteCart'])->name('DeleteCartAoCuoi');

//Giỏ hàng ảnh cưới
Route::get('/cartanhcuoi/{id}', [CartAnhCuoiController::class, 'AddCart'])->name('AddCartAnhCuoi');
Route::get('/DeleteCartAnhCuoi/{id}', [CartAnhCuoiController::class, 'DeleteCart'])->name('DeleteCartAnhCuoi');

//Chekout
Route::get('/checkoutaocuoi', [BillsAoCuoiController::class,'index'])->name('checkoutaocuoi');
Route::post('/checkoutaocuoi', [BillsAoCuoiController::class,'submit'])->name('submitaocuoi');
Route::get('/checkoutanhcuoi', [BillsAnhCuoiController::class,'index'])->name('checkoutanhcuoi');
Route::post('/checkoutanhcuoi', [BillsAnhCuoiController::class,'submit'])->name('submitanhcuoi');

//History Cart
Route::get('/HistoryCart', [HistoryCart::class, 'index'])->name('HistoryCart')->middleware('auth');
Route::get('/HistoryCartAoCuoi/{id}', [HistoryCart::class, 'showbilldetail'])->name('HistoryCartAoCuoi');
Route::get('/HistoryCartAnhCuoi/{id}', [HistoryCart::class, 'showbilldetail2'])->name('HistoryCartAnhCuoi');

//admin QLTK
Route::get('/admin', [HomeAdminController::class ,'index'])->name('Admin')->middleware('auth');
Route::get('/addusers', [HomeAdminController::class ,'add'])->name('AddUsers')->middleware('auth');
Route::post('/addusers', [HomeAdminController::class ,'insert'])->name('AddUsers')->middleware('auth');
Route::get('/editinfousers/{    id}', [HomeAdminController::class ,'edit'])->name('EditInfoUsers')->middleware('auth');
Route::post('/editinfousers/{id}', [HomeAdminController::class ,'update'])->name('EditInfoUsers')->middleware('auth');
Route::get('/deleteinfousers/{id}', [HomeAdminController::class ,'delete'])->name('DeleteInfoUsers')->middleware('auth');

//admin BillsAoCuoi
Route::get('/AdminBillsAoCuoi', [AdminBillsAoCuoi::class, 'index'])->name('AdminBillsAoCuoi');
Route::get('/AdminBillsAoCuoi/{id}', [AdminBillsAoCuoi::class, 'delete'])->name('DeleteBillsAoCuoi');
Route::get('/AdminBillsAoCuoiDetail/{id}', [AdminBillsAoCuoi::class, 'showdetail'])->name('AdminBillsAoCuoiDetail');
Route::get('/AdminBillsAoCuoiDetailDelete/{id}', [AdminBillsAoCuoi::class, 'deletedetail'])->name('DeleteBillsAoCuoiDetail');

//admin BillsAnhCuoi
Route::get('/AdminBillsAnhCuoi', [AdminBillsAnhCuoi::class, 'index'])->name('AdminBillsAnhCuoi');
Route::get('/AdminBillsAnhCuoi/{id}', [AdminBillsAnhCuoi::class, 'delete'])->name('DeleteBillsAnhCuoi');
Route::get('/AdminBillsAnhCuoiDetail/{id}', [AdminBillsAnhCuoi::class, 'showdetail'])->name('AdminBillsAnhCuoiDetail');
Route::get('/AdminBillsAnhCuoiDetailDelete/{id}', [AdminBillsAnhCuoi::class, 'deletedetail'])->name('DeleteBillsAnhCuoiDetail');



