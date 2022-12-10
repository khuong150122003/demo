<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimberController;
use App\Http\Controllers\Frontend_controler;

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

Route::get('/', [Frontend_controler::class, 'index']);
Route::get('timber-list', [TimberController::class, 'index']);
Route::get('add-timber', [TimberController::class, 'addTimber']);
Route::post('save-timber', [TimberController::class, 'saveTimber']);
Route::get('edit-timber/{id}', [TimberController::class, 'editTimber']);
Route::post('update-timber', [TimberController::class, 'updateTimber']);
Route::get('delete-timber/{id}', [TimberController::class, 'deleteTimber']);

Route::get('shop', [Frontend_controler::class, 'index']);
Route::get('product', [Frontend_controler::class, 'product']);
Route::get('about', [Frontend_controler::class, 'about']);
Route::get('single', [Frontend_controler::class, 'single']);
Route::get('contact', [Frontend_controler::class, 'contact']);
Route::get('service', [Frontend_controler::class, 'service']);























































































