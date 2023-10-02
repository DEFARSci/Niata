<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\CarressolController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategieArticleController;
use App\Http\Controllers\EvaluationController;

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

Route::get('/', [AcceuilController::class, 'index'])->name('accueil');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::post('/mail', [ContactController::class, 'mail'])->name('mail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//blog
Route::get('/index', [BlogController::class, 'index'])->name('blog');
Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/store', [BlogController::class, 'store'])->name('store');
Route::get('voirBlog/{id}' , [BlogController::class, 'show'])->name('blog.show');
Route::get('editBlog/{id}' , [BlogController::class, 'edit'])->name('blog.edit');
Route::post('updateBlog' , [BlogController::class, 'update'])->name('blog.update');
Route::delete('deleteblog/{id}' , [BlogController::class, 'destroy'])->name('blog.destroy');

//categorie
Route::get('/categorie', [CategieArticleController::class, 'index'])->name('categorie.create');
Route::post('/createcategorie', [CategieArticleController::class, 'store'])->name('categorie.store');
Route::get('/editcategorie/{id}', [CategieArticleController::class, 'edit'])->name('categorie.edit');
Route::post('/updatecategorie', [CategieArticleController::class, 'update'])->name('categorie.update');
Route::delete('/deletecategorie/{id}', [CategieArticleController::class, 'destroy'])->name('categorie.destroy');

//carousel
Route::get('/images/create', [CarressolController::class, 'create'])->name('carressol.create');
Route::post('/images', [CarressolController::class, 'store'])->name('carressol.store');
Route::delete('/deleteimage/{id}', [CarressolController::class, 'destroy'])->name('carressol.destroy');

//voiture
Route::get('/voiture/create', [VoitureController::class, 'create'])->name('voiture.create');
Route::get('/voiture/index', [VoitureController::class, 'index'])->name('voiture.index');
Route::get('/voiture/show/{id}', [VoitureController::class, 'show'])->name('voiture.show');
Route::post('/voiture/store', [VoitureController::class, 'store'])->name('voiture.store');
Route::get('/voiture/search', [VoitureController::class, 'chercheByMarque'])->name('voiture.search');
Route::delete('/deletevoiture/{id}', [VoitureController::class, 'destroy'])->name('voiture.destroy');
Route::get('/voiture/liste', [VoitureController::class, 'list_voiture'])->name('voiture.liste');
Route::get('/voiture/edit/{id}', [VoitureController::class, 'edit'])->name('voiture.edit');
Route::post('/voiture/update', [VoitureController::class, 'update'])->name('voiture.update');


//Evaluation
Route::get('/evaluation/index', [EvaluationController::class, 'index'])->name('evaluation.index');
Route::post('/evaluation/voiture', [EvaluationController::class, 'voiture'])->name('evaluation.voiture');


require __DIR__.'/auth.php';
