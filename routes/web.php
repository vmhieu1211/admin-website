<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductSuggestController;
use App\Http\Controllers\SuggestController;

 

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
    return view('index');
});
Route::get('/login', [LoginController::class, 'loginForm'])->name('login.submit');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('admin.handle.login');


Route::group(['middleware' => 'CheckLogout'], function () {
    Route::get('/logout', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('/logout', [LoginController::class, 'logoutSubmit'])->name('logoutSubmit');
});

Route::middleware(['CheckLogin'])->group(function () {
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('suggests', SuggestController::class);
Route::resource('productSuggest',ProductSuggestController::class);
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web' ]], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});