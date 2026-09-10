<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index']);

Route::get('/projects', function () {
    return 'Projects';
});

Route::get('/about', function () {
    return 'About';
});

Route::get('/contact', function () {
    return 'Contact';
});