<?php

use Illuminate\Support\Facades\Route;

//admin cobtroller define here
use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;



//site cobtroller define here
use App\Http\Controllers\SiteController;

//user cobtroller define here
use App\Http\Controllers\Frontend\User\UserController;
use App\Http\Controllers\Frontend\Auth\OTPController;



//Site routes
Route::get('/', function () {
    return view('welcome');
});




require __DIR__.'/auth.php';

//user profile

Route::middleware('auth')->group(function(){

    //frontend routes
    Route::get('dashboard', [SiteController::class, 'index'])->name('dashboard');

    //admin dashboard route
    Route::get('user-profile', [UserController::class, 'index'])->name('user-profile');

});



//admin routes

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){

        //admin login route
        Route::get('/login', [AdminAuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [AdminAuthenticatedSessionController::class, 'store'])->name('adminlogin');

    });

    Route::middleware('admin')->group(function(){

        //admin dashboard route
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        //settings routes
        Route::resource('settings', SettingController::class);
        Route::get('active-settings/{id}', [App\Http\Controllers\Admin\SettingController::class,'active_settings']);
        Route::get('inactive-settings/{id}', [App\Http\Controllers\Admin\SettingController::class,'inactive_settings']);


        //product routes
        Route::resource('product', ProductController::class);
        Route::get('active-product/{id}', [App\Http\Controllers\Admin\ProductController::class,'active_product']);
        Route::get('inactive-product/{id}', [App\Http\Controllers\Admin\ProductController::class,'inactive_product']);

        //product import export route.................... 
        Route::get('/product-import', [App\Http\Controllers\Admin\ProductController::class, 'import_product'])->name('product-import');
        Route::post('/import', [App\Http\Controllers\Admin\ProductController::class, 'import'])->name('import');
        Route::get('/export-product', [App\Http\Controllers\Admin\ProductController::class, 'export'])->name('export-product');


    });

    //admin logout route
    Route::post('/logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
});