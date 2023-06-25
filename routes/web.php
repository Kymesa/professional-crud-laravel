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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/price', [HomeController::class, 'price'])->name('price');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/success', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/services', [PostCrudController::class, 'index'])->name('services.crud');

Route::get('/services/create', [PostCrudController::class, 'create'])->name('services.create');

Route::post('/services/store', [PostCrudController::class, 'store'])->name('services.store');

Route::get('users/{id}', [PostCrudController::class, 'show'])->name('services.show');

Route::get('serivices/{id}', [PostCrudController::class, 'edit'])->name('services.edit');

Route::post('services/update/{id}', [PostCrudController::class, 'update'])->name('services.update');

Route::get('services/destroy/{id}', [PostCrudController::class, 'destroy'])->name('services.destroy');

Route::get('services/trashed', [PostCrudController::class, 'indexTrashed'])->name('trashed');

Route::get('services/trashed/all', [PostCrudController::class, 'trashedAll'])->name('trashed.all');

Route::get('/services/trashed/destroy/{id}', [PostCrudController::class, 'destroyTrashed'])->name('trashed.destroy');

Route::get('/services/trashed/recover/{id}', [PostCrudController::class, 'recoverTrashed'])->name('trashed.recover');

// Route::get('/', function () {
//     $posts = Post::all();
//     return $posts;
// });
