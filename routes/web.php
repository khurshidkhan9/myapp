<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DonationController;

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
Route::get('posts/{post}', [PageController::class, 'showblog'])->name('posts.show');
Route::get('make/{id}', [HomeController::class, 'makeAdmin']);
    
});

Auth::routes();

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profile/{id}/edit', [ UsersController::class, 'edit_profile'])->name('editProfile');
Route::post('/profile/{id}/edit', [ UsersController::class, 'storeImage' ])->name('images.store');

// Paypal Donation Form
Route::get( 'donation-form',  [ DonationController::class, 'donationForm' ] );
Route::get( 'donation/success',  [ DonationController::class, 'donationSuccess' ] )->name('donation.success');
Route::get( 'donation/cancelled',  [ DonationController::class, 'donationCancelled' ] )->name('donation.cancelled');
Route::get( 'donation/notify_url',  [ DonationController::class, 'donationNotify' ] )->name('donation.notify');
Route::get('/my-mail', [ HomeController::class, 'myMail']);

Route::prefix('admin')->group(function () {
    Route::middleware(['is_admin'])->group(function () {
    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/profile/{id}/edit', [ UsersController::class, 'edit_profile'])->name('editProfile');
    Route::post('/profile/{id}/edit', [ UsersController::class, 'storeImage' ])->name('images.store');
    
    // dashboard routes for admin panel
    Route::get('details', [HomeController::class, 'alldetails']);

    // users routes for admin panel
    Route::resource('users', UsersController::class);
    Route::post('users/{id}', [UsersController::class, 'updateuser']);

    // posts routes for admin panel
    Route::resource('posts', PostController::class);
    Route::post('posts/{id}', [PostController::class, 'updatepost']);

    // photos routes for admin panel
    Route::resource('photos', PhotoController::class);
    Route::post('photos/{id}', [PhotoController::class, 'updatephoto']);

    // contact us routes for admin panel 
    Route::resource('contact', ContactController::class);
    Route::post('contact/{id}', [ContactController::class, 'updatephoto']);

    // comments routes for admin panel 
    Route::resource('comments', CommentController::class);
    Route::post('comments/{id}', [CommentController::class, 'updatecomment']);

    //  setting routes for admin panel
    Route::resource('settings', SettingController::class);

    //  donations routes for admin panel
    Route::get('donations', [DonationController::class, 'alldonations']);
    Route::delete('donations/{id}', [DonationController::class, 'destroy']);


});
});