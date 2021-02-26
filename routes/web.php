<?php

use App\Http\Controllers\AboutDescriptionController;
use App\Http\Controllers\AboutProjectController;
use App\Http\Controllers\AboutTitleController;
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

                    // AboutTitle

Route::get('/back-aboutTitle', [AboutTitleController::class, 'index']);
Route::post('store-aboutTitle', [AboutTitleController::class, 'store']);
Route::get('/edit-aboutTitle/{id}', [AboutTitleController::class, "edit"]);
Route::post('/update-aboutTitle/{id}', [AboutTitleController::class, 'update']);
Route::get('/delete-aboutTitle/{id}', [AboutTitleController::class, 'destroy']);

                    // About Description

Route::get('/back-aboutDescription', [AboutDescriptionController::class, 'index']);
Route::post('store-aboutDescription', [AboutDescriptionController::class, 'store']);
Route::get('/edit-aboutDescription/{id}', [AboutDescriptionController::class, "edit"]);
Route::post('/update-aboutDescription/{id}', [AboutDescriptionController::class, 'update']);
Route::get('/delete-aboutDescription/{id}', [AboutDescriptionController::class, 'destroy']);

                    // About project

Route::get('back-aboutProject', [AboutProjectController::class, 'index']);
Route::post('store-aboutProject', [AboutProjectController::class, 'store']);
Route::get('/edit-aboutProject/{id}', [AboutProjectController::class, "edit"]);
Route::post('/update-aboutProject/{id}', [AboutProjectController::class, 'update']);
Route::get('/delete-aboutProject/{id}', [AboutProjectController::class, 'destroy']);



        // faut que je commence l'about progress 








