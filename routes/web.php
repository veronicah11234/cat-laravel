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


    Route::group(['middleware' => 'web'], function () {
        Route::get('/', function () {
            return view('welcome');
        });
        // Password reset routes
        // Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        // Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        // Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    
        // Other routes...
    });
