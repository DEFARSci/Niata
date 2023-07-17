<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarressolController;

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
    return view('mail.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/mail', [ContactController::class, 'mail'])->name('mail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/store', [BlogController::class, 'store'])->name('store');
Route::get('voirBlog/{id}' , [BlogController::class, 'show'])->name('blog.show');


Route::get('/', [CarressolController::class, 'index']);
Route::get('/images/create', [CarressolController::class, 'create'])->name('carressol.create');
Route::post('/image', [CarressolController::class, 'store'])->name('store');
require __DIR__.'/auth.php';
