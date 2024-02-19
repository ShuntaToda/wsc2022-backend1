<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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
Route::group(["middleware" => ["auth", "is_admin","save_last_login_time"], "as"=>"admin."],function(){
    Route::get('/', [AdminController::class, "index"])->name("home");
});
Route::group(["middleware" => ["auth", "is_admin","save_last_login_time"], "as"=>"admin.", "prefix" => "admin"],function(){
    Route::get('/admin-users', [AdminController::class, 'admin_users'])->name('admin-users');
    Route::get('/admin-user/{name}', [AdminController::class, 'show_user'])->name('edit-admin-user');
    Route::post('/admin-user/{name}', [AdminController::class, 'edit_user'])->name('edit-admin-user');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/games', [AdminController::class, 'games'])->name('games');
    Route::get('/game/{name}', [AdminController::class, 'edit_game'])->name('edit-game');
});

Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "login"])->name("login");