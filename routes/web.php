<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CommissionsController;
use App\Http\Controllers\AdminController;
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

Route::resource('dashboard', DashboardController::class);

Route::resource('colaboradores', ColaboradorController::class);

Route::resource('user', UserController::class);

Route::resource('faq', FaqController::class);

Route::resource('login', LoginController::class);

Route::resource('reset', ResetController::class);

Route::resource('change', PasswordChangeController::class);

Route::resource('singup', SingUpController::class);

Route::resource('sales', SalesController::class);

Route::resource('commissions', CommissionsController::class);

Route::resource('admin', AdminController::class);
