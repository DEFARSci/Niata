<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\CarressolController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\CategieArticleController;
use App\Models\Temoignage;

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
// Route::get('/avis', function () {

//     return view('carrousel.caroussel-avis');
// });

Route::get('/avis', [TemoignageController::class, 'avis'])->name('avis');
// Route::get('/', function () {
//     return view('carrousel.caroussel-avis');
// });

  Route::get('/', [AcceuilController::class, 'index'])->name('accueil');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::post('/mail', [ContactController::class, 'mail'])->name('mail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//blog
Route::get('/index', [BlogController::class, 'index'])->name('blog');
Route::get('/create', [BlogController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/store', [BlogController::class, 'store'])->name('store');
Route::get('voirBlog/{id}' , [BlogController::class, 'show'])->middleware(['auth'])->name('blog.show');
Route::get('editBlog/{id}' , [BlogController::class, 'edit'])->middleware(['auth'])->name('blog.edit');
Route::post('updateBlog' , [BlogController::class, 'update'])->middleware(['auth'])->name('blog.update');
Route::delete('deleteblog/{id}' , [BlogController::class, 'destroy'])->middleware(['auth'])->name('blog.destroy');

//categorie
Route::get('/categorie', [CategieArticleController::class, 'index'])->middleware(['auth'])->name('categorie.create');
Route::post('/createcategorie', [CategieArticleController::class, 'store'])->middleware(['auth'])->name('categorie.store');
Route::get('/editcategorie/{id}', [CategieArticleController::class, 'edit'])->middleware(['auth'])->name('categorie.edit');
Route::post('/updatecategorie', [CategieArticleController::class, 'update'])->middleware(['auth'])->name('categorie.update');
Route::delete('/deletecategorie/{id}', [CategieArticleController::class, 'destroy'])->middleware(['auth'])->name('categorie.destroy');

//carousel
Route::get('/images/create', [CarressolController::class, 'create'])->middleware(['auth'])->name('carressol.create');
Route::post('/images', [CarressolController::class, 'store'])->middleware(['auth'])->name('carressol.store');
Route::delete('/deleteimage/{id}', [CarressolController::class, 'destroy'])->middleware(['auth'])->name('carressol.destroy');

//voiture
Route::get('/voiture/create', [VoitureController::class, 'create'])->middleware(['auth'])->name('voiture.create');
Route::get('/voiture/index', [VoitureController::class, 'index'])->name('voiture.index');
Route::get('/voiture/show/{id}', [VoitureController::class, 'show'])->name('voiture.show');
Route::post('/voiture/store', [VoitureController::class, 'store'])->name('voiture.store');
Route::get('/voiture/search', [VoitureController::class, 'chercheByMarque'])->name('voiture.search');
Route::delete('/deletevoiture/{id}', [VoitureController::class, 'destroy'])->name('voiture.destroy');
Route::get('/voiture/liste', [VoitureController::class, 'list_voiture'])->name('voiture.liste');
Route::get('/voiture/edit/{id}', [VoitureController::class, 'edit'])->middleware(['auth'])->name('voiture.edit');
Route::post('/voiture/update', [VoitureController::class, 'update'])->middleware(['auth'])->name('voiture.update');


//Evaluation
Route::get('/evaluation/index', [EvaluationController::class, 'index'])->name('evaluation.index');
Route::post('/evaluation/voiture', [EvaluationController::class, 'voiture'])->name('evaluation.voiture');
Route::get('/evaluation/create', [EvaluationController::class, 'create'])->name('evaluation.create');
Route::post('/evaluation/store', [EvaluationController::class, 'store'])->name('evaluation.store');
Route::get('/evaluation/liste', [EvaluationController::class, 'liste'])->name('evaluation.liste');
Route::delete('/evaluation/delete/{id}', [EvaluationController::class, 'destroy'])->middleware(['auth'])->name('evaluation.destroy');
Route::get('/evaluation/edit/{id}', [EvaluationController::class, 'edit'])->middleware(['auth'])->name('evaluation.edit');
Route::post('/evaluation/update', [EvaluationController::class, 'update'])->middleware(['auth'])->name('evaluation.update');

//input dynamique
Route::get('/getModels/{marque}', [EvaluationController::class, 'models'])->name('input.model');
Route::get('/getAnnee/{model}', [EvaluationController::class, 'annee'])->name('input.annee');


// temoignage
// Route::resources(['temoignage' => TemoignageController::class]);
Route::get('/temoignage/index', [TemoignageController::class, 'index'])->name('temoignage.index');
Route::get('/temoignage/create', [TemoignageController::class, 'create'])->name('temoignage.create');
Route::post('/temoignage/store', [TemoignageController::class, 'store'])->name('temoignage.store');
Route::get('/temoignage/etat/{id}',[TemoignageController::class, 'etat'])->name('temoignage.etat');
Route::get('temoignage/show/{id}', [TemoignageController::class, 'show'])->name('temoignage.show');
Route::get('temoignage/delete/{id}', [TemoignageController::class, 'destroy'])->name('temoignage.delete');
Route::get('temoignage/edit/{id}', [TemoignageController::class, 'edit'])->middleware(['auth'])->name('temoignage.edit');
Route::post('temoignage/update/{id}', [TemoignageController::class, 'update'])->middleware(['auth'])->name('temoignage.update');

Route::post("simple-excel", [EvaluationController::class, 'import'])->name('excel.import');

require __DIR__.'/auth.php';
