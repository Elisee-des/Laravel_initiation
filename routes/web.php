<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArticleController::class, 'index'])->name('accueil');
Route::get('/article/{id}', [ArticleController::class, 'show'])->whereNumber('id');
Route::get('/contactez-nous', [ArticleController::class, 'contact'])->name('contact');
Route::get('/apropos', [ArticleController::class, 'apropos'])->name('apropos');

// Route::get('/article', function () {
//     return response()->json([
//         'titre' => 'Mon titre',
//         'description' => 'Ma description'
//     ]);
// });

// Route::get('/articles', function () {
//     return view('articles');
// });