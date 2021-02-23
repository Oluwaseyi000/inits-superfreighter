<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\GeneralSettingController;

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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('general-settings', GeneralSettingController::class);
    Route::post('flat-rate', [GeneralSettingController::class, 'storeFlatRate'])->name('flat-rate');
    Route::get('order-list', [OrderController::class, 'adminList'])->name('order-list');
});

Route::get('/', [OrderController::class, 'index']);
// Route::('order', OrderController::class);
Route::resource('order', OrderController::class);
Route::post('preview-order', [OrderController::class, 'previewOrder'])->name('order.previewOrder');
Route::post('order-pay', [OrderController::class, 'payStackPay'])->name('paystack.pay');
Route::get('payment/callback', [OrderController::class, 'handleGatewayCallback']);
Route::get('payment/callback', [OrderController::class, 'handleGatewayCallback']);
Route::get('order-placed', function(){
    return view('emails.orderPlacedEmail');
});

