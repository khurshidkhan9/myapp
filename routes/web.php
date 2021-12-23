<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

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

Route::get('admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profile/{id}/edit', [ UsersController::class, 'edit_profile'])->name('editProfile');
Route::post('/profile/{id}/edit', [ UsersController::class, 'storeImage' ])->name('images.store');

Route::prefix('admin')->group(function () {
    Route::resource('users', UsersController::class);
    Route::post('users/{id}', [UsersController::class, 'updateuser']);
});