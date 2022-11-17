<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProductController;
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
Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);

Route::prefix('admin')->group(function ()
{
    Route::get('/',[AdminController::class, 'index']);
    Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
    Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);
    Route::get('/logout',[AdminController::class, 'logout']);
    Route::get('/add-category-product',[CategoryProductController::class, 'add_category_product']);

    Route::post('/save-category-product',[CategoryProductController::class, 'insert_category_product']);
    Route::post('/edit-category',[CategoryProductController::class, 'save_category']);

    Route::get('/list-category-product',[CategoryProductController::class, 'list_category_product']);
});
