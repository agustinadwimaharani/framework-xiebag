<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasController;
use App\Models\kategori;
use App\Models\Tas;
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
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action', [
    AuthController::class,
    'registerAction'
])->name('register.action');

Route::post('/login/action', [
    AuthController::class,
    'loginAction'
])->name('login.action');



Route::get('/logout', [
    AuthController::class,
    'logout'
])->name('logout');





Route::middleware('auth')->group(
    function () {

        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/admin/data_product', function () {
            return view('admin.data_product', [
                "tas" => Tas::all()
            ]);
        })->name('admin.data_product');

        Route::get('/admin/data_kategori', function () {
            return view('admin.data_kategori', [
                'kategori' => kategori::all()
            ]);
        })->name('admin.data_kategori');

        Route::controller(TasController::class)->group(function () {
            Route::get('/admin/data_product/tambah', 'tambah')->name('admin.create');
            Route::post('/admin/data_product/tambah/action','store')->name('admin.store');
            Route::get('/admin/data_product/edit/{id}', 'edit')->name('admin.edit');
            Route::post('/admin/data_product/edit/{id}/action','update')->name('admin.update');
            Route::post('/admin/data_product/delete/{id}/action', 'delete')->name('admin.delete');
        });

    }

);
// Route::get('/admin/data_product', function () {
//     return view('admin.data_product', [
//     "tas" => Tas::all()
//     ]);
//     })->name('admin.data_product');


// Route::get('/admin/data_product', function () {
//     return view('admin.create', [
//     "tas" => Tas::all()
//     ]);
//     })->name('admin.create');
