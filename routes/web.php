<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostCrudController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/price', 'price')->name('price');
});

Route::controller(LoginController::class)->name('login')->group(function () {
    Route::get('/login', 'index')->name('');
    Route::post('/success', 'handleLogin')->name('.submit');
});

Route::controller(PostCrudController::class)->prefix('/services')->name('services')->group(function () {
    Route::get('/',  'index')->name('.crud');
    Route::get('/create', 'create')->name('.create');
    Route::post('/store', 'store')->name('.store');
    Route::get('/show/{id}', 'show')->name('.show');
    Route::get('/edit/{id}', 'edit')->name('.edit');
    Route::post('/update/{id}', 'update')->name('.update');
    Route::get('/destroy/{id}', 'destroy')->name('.destroy');
});

Route::controller(PostCrudController::class)->prefix('/services/trashed')->name('trashed')->group(function () {
    Route::get('/', 'indexTrashed')->name('');
    Route::get('/all', 'trashedAll')->name('.all');
    Route::get('/destroy/{id}', 'destroyTrashed')->name('.destroy');
    Route::get('/recover/{id}', 'recoverTrashed')->name('.recover');
});



// Route::get('/', function () {
//     $posts = Post::all();
//     return $posts;
// });
