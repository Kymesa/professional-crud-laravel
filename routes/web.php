<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostCrudController;
use App\Mail\EmailOrderPosts;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

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
    Route::post('/success', 'handleLogin')->name('.submit')->middleware('test');
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



Route::get('/send-mail', function () {

    $name = "Test Code";
    $toEmail = "test@test.com";
    $img = Post::find(2)->image;
    Mail::send(new EmailOrderPosts($name, $toEmail, $img));

    dd('OK');
});

Route::get('/session-get', function (Request $request) {
    session()->forget('product_id');
    return dd(session()->all());
})->name('session.get');

Route::get('/session-save', function (Request $request) {
    return redirect()->route('session.get');
});
