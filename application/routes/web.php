<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;


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

Route::get('/', function () {
    return view('cover');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardUserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/dashboard/update', [DashboardUserController::class, 'store']);

Route::get('/animeongoing', function () {
    return view('animeongoing.index');
});

Route::get('/animeterbaik', function () {
    return view('animeterbaik.index');
});

Route::get('/animeterpopuler', function () {
    return view('animeterpopuler.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/musim', function () {
    return view('musim');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/genre', function () {
    return view('genre');
});