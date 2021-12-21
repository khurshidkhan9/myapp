<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('index');
});

Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('admin/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::prefix('/admin')->group(function () {
    Route::resource('users', UsersController::class);
    Route::post('users/{id}', [UsersController::class, 'updateuser']);
});