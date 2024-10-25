<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin');
    Route::get('/admin_dashboard', [AdminController::class, 'admin'])->name('admin');
    Route::get('/form', [AdminController::class, 'form'])->name('form');
    Route::post('/add_users',[AdminController::class, 'add_user'])->name('add_user');
    Route::get('/user_detail', [AdminController::class, 'user_detail'])->name('user_detail');


});
