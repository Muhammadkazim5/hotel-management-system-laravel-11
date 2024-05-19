<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('/', [DashboardController::class, 'home']);
Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/', [DashboardController::class, 'home'])->name('account.home');
        Route::get('room', [HomeController::class, 'room'])->name('account.rooms');
        // Route::get('about', [HomeController::class, 'about'])->name('account.about');
        // Route::get('gallery', [HomeController::class, 'gallery'])->name('account.gallery');
        // Route::get('blog', [HomeController::class, 'blog'])->name('account.blog');
        // Route::get('contact', [HomeController::class, 'contact'])->name('account.contact');
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('room_detail/{id}', [HomeController::class, 'room_detail'])->name('account.room_detail');
        Route::post('contact', [HomeController::class, 'contact'])->name('account.contact');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.index');
        Route::get('room-detail/{id}', [HomeController::class, 'room_detail'])->name('account.room_detail');
        Route::post('add_booking/{id}', [HomeController::class, 'add_booking'])->name('account.add_booking');
        Route::post('contact', [HomeController::class, 'contact'])->name('account.contact');
        Route::get('room', [HomeController::class, 'room'])->name('account.rooms');
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');

    });

});
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('create_room', [AdminLoginController::class, 'create_room'])->name('admin.create_room');
        Route::post('add_room', [AdminLoginController::class, 'add_room'])->name('admin.add_room');
        Route::get('view_room', [AdminLoginController::class, 'view_room'])->name('admin.view_room');
        Route::get('delete_room/{id}', [AdminLoginController::class, 'delete_room'])->name('admin.delete_room');
        Route::get('edit_room/{id}', [AdminLoginController::class, 'edit_room'])->name('admin.edit_room');
        Route::post('edit_room/{id}', [AdminLoginController::class, 'update_room'])->name('admin.update_room');
        Route::get('bookings', [AdminLoginController::class, 'bookings'])->name('admin.bookings');
        Route::get('delete_booking/{id}', [AdminLoginController::class, 'delete_booking'])->name('admin.delete_booking');
        Route::get('book_approve/{id}', [AdminLoginController::class, 'book_approve'])->name('admin.book_approve');
        Route::get('book_reject/{id}', [AdminLoginController::class, 'book_reject'])->name('admin.book_reject');
        Route::get('view_gallery}', [AdminLoginController::class, 'view_gallery'])->name('admin.view_gallery');
        Route::post('upload_gallery}', [AdminLoginController::class, 'upload_gallery'])->name('admin.upload_gallery');
        Route::get('delete_image/{id}', [AdminLoginController::class, 'delete_image'])->name('admin.delete_image');
        Route::get('view_messages', [AdminLoginController::class, 'view_messages'])->name('admin.view_messages');
        Route::get('send_mail/{id}', [AdminLoginController::class, 'send_mail'])->name('admin.send_mail');
        Route::post('mail/{id}', [AdminLoginController::class, 'mail'])->name('admin.mail');


    });

});


