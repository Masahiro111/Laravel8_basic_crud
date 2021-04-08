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

Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::post('/', [ArticleController::class, 'store'])->name('store');
Route::get('/{id}', [ArticleController::class, 'show'])->name('show');
Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('edit');
Route::put('/{id}', [ArticleController::class, 'update'])->name('update');
Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('destroy');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
