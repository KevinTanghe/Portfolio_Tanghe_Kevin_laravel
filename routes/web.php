<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/back', [HomeController::class, 'back']);

                    // Navbar

Route::get('/back-navbar', [NavbarController::class, 'index']);
Route::post('/store-navbar', [NavbarController::class, 'store']);
Route::get('/edit-navbar/{id}', [NavbarController::class, 'edit']);
Route::post('/update-navbar/{id}', [NavbarController::class, 'update']);
Route::get('/delete-navbar/{id}', [NavbarController::class, 'destroy']);

                    // hero

Route::get('back-hero', [HeroController::class, 'index']);
Route::post('store-hero', [HeroController::class, 'store']);
Route::get('/edit-hero/{id}', [HeroController::class, "edit"]);
Route::post('/update-hero/{id}', [HeroController::class, 'update']);
Route::get('/delete-hero/{id}', [HeroController::class, 'destroy']);
