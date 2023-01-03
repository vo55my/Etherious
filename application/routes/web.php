<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\AnimeController;
use App\Http\Controllers\User\DashboardUserController;
use App\Models\Anime;

// use App\Http\Controllers\User\HomeController;
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;

>>>>>>> main

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
<<<<<<< HEAD
    return view('index', [
        'animes' => Anime::all()
    ]);
=======
    return view('cover');
});

Route::get('/index', function () {
    return view('index');
>>>>>>> main
});

// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

<<<<<<< HEAD

// Route Admin
Route::prefix('/dashboard-admin')->middleware('auth')->group(function () {
    // Dashboard Admin
    Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
    Route::post('/update', [DashboardAdminController::class, 'update']);
    Route::post('/create', [AnimeController::class, 'store']);
});
=======
Route::get('/dashboard', [DashboardUserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');
>>>>>>> main

// Route User
Route::prefix('/dashboard-user')->middleware('auth')->group(function () {
    // Dashboard User
    Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard-user');
    Route::post('/update', [DashboardUserController::class, 'update']);
});

<<<<<<< HEAD
Route::get('/dashboard-admin.home', function(){
    return view('dashboard-admin.home.index');
})->middleware('auth');

Route::get('/dashboard-user.home', function(){
    return view('dashboard-user.home.index');
})->middleware('auth');
=======
Route::post('/dashboard/update', [DashboardUserController::class, 'store']);
>>>>>>> main

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
    return view('detail', [
        'animes' => Anime::all()
    ]);
});

Route::get('/musim', function () {
    return view('musim');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/genre', function () {
    return view('genre');
<<<<<<< HEAD
});
=======
});
>>>>>>> main
