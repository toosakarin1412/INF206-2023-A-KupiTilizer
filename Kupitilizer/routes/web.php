<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestJemputController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/aboutus', function(){
    return view('aboutus');
})->name('aboutus');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/requestjemput', function () {
        return view('requestPenjemputan');
    });

    Route::post('/requestjemput/create', [RequestJemputController::class, 'create'])->name('penjemputan.create');
    
    Route::get('/statuspermintaan', function () {
        return view('statusPermintaanUser');
    });


    Route::get('/coupon', function () {
        return view('coupon');
    });

    Route::get('/market', function () {
        return view('market');
    });

    Route::get('/setting', [ProfileController::class, 'setting']);

    Route::middleware(['user-access:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'adminDashboard']);
        Route::get('/admin/requestjemput', [RequestJemputController::class, 'index']);
        Route::get('/admin/pembelian', [PembelianController::class, 'index']);
        Route::get('/admin/product', [ProductController::class, 'index']);
        Route::get('/admin/coupon', [CouponController::class, 'index']);
        Route::get('/admin/manageuser', [UserController::class, 'manageUser']);
        Route::get('/admin/addadmin', [AdminController::class, 'addadmin']); // menambahkan rute baru ke AdminController

    });

    Route::middleware(['user-access:manager'])->group(function () {
        Route::get('/manager', [ManagerController::class, 'managerDashboard']);
        Route::get('/manager/requestjemput', [RequestJemputController::class, 'index']);
        Route::get('/manager/pembelian', [PembelianController::class, 'index']);
        Route::get('/manager/product', [ProductController::class, 'index']);
        Route::get('/manager/coupon', [CouponController::class, 'index']);
        Route::get('/manager/manageadmin', [AdminController::class, 'manageAdmin']);

        Route::get('/manager/manageuser', [UserController::class, 'manageUser']);
        Route::post('/manager/manageuser', [UserController::class, 'add'])->name('user.add');
        Route::delete('/manager/manageuser/delete/{email}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('/manager/manageuser/edit/{email}', [UserController::class, 'show']);
        Route::patch('/manager/manageuser/update/{email}', [UserController::class, 'update']);

        Route::get('/manager/manageradmin', [AdminController::class, 'manageAdmin'])->name('manager.manageadmin');
        Route::post('/manager/addadmin', [AdminController::class, 'addAdmin'])->name('manager.addadmin');
        Route::post('/manager/manageuser', [UserController::class, 'add'])->name('user.add');
        Route::delete('/manager/manageadmin/delete/{email}', [AdminController::class, 'destroy'])->name('user.destroy');
        Route::get('/manager/manageadmin/edit/{email}', [AdminController::class, 'show']);
        Route::patch('/manager/manageadmin/update/{email}', [AdminController::class, 'update']);
    });

    Route::middleware(['user-access:user'])->group(function () {
        Route::get('/user', [UserController::class, 'userHome']);

    });
});

require __DIR__.'/auth.php';
