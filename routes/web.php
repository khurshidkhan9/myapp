<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

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

Route::prefix('/')->group(function () {
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('post/{post}', [PageController::class, 'show'])->name('posts.show');
    
});

Auth::routes();

Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profile/{id}/edit', [ UsersController::class, 'edit_profile'])->name('editProfile');
Route::post('/profile/{id}/edit', [ UsersController::class, 'storeImage' ])->name('images.store');

Route::prefix('admin')->group(function () {
    Route::middleware(['is_admin'])->group(function () {
    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('details', [HomeController::class, 'alldetails']);
    Route::resource('users', UsersController::class);
    Route::post('users/{id}', [UsersController::class, 'updateuser']);

    // posts routes for admin panel

    Route::resource('posts', PostController::class);
    Route::post('posts/{id}', [PostController::class, 'updatepost']);

    // photos routes for admin panel

    Route::resource('photos', PhotoController::class);
    Route::post('photos/{id}', [PhotoController::class, 'updatephoto']);


});
});