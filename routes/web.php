<?php

use Illuminate\Support\Facades\Route;
//
use App\Http\Controllers\PostController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'show_post']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [dashboard::class, 'show_post'])->name('dashboard');

    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    // create post
    Route::post('/post', [PostController::class, 'create'])->name('post_create');

    // edit post
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::put('/post/edit/{id}', [PostController::class, 'update'])->name('post_update');

    // delete
    Route::get('post/delete/{id}', [PostController::class, 'destroy'])->name('post_destroy');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', [dashboard::class, 'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Route::get('/post', [PostController::class, 'index'])->middleware(['auth'])->name('post_index');
// Route::post('/post', [PostController::class, 'create'])->middleware(['auth'])->name('post_create');
