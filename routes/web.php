<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryRestApiController;
use App\Http\Controllers\PostRestApiController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Category/CreateCategory', function () {
    return view('Category.CreateCategory');
});
Route::get('/Category/{id}/EditCategory', [CategoryRestApiController::class, 'edit']);

Route::get('/api/categorias', [CategoryRestApiController::class, 'index']);
Route::post('/api/categoriasCreate', [CategoryRestApiController::class, 'crearCategory'])->name('categoriasCreate');
Route::get('/api/categoryBy/{id}', [CategoryRestApiController::class, 'buscarById']);
Route::delete('/api/deleteCategory/{id}', [CategoryRestApiController::class, 'borrarCategory'])->name('categoriasDelete');
Route::post('/api/categoriasUpdate', [CategoryRestApiController::class, 'modificarCategory'])->name('categoriasUpdate');

Route::get('/api/post', [PostRestApiController::class, 'index']);
Route::post('/api/postCreate', [PostRestApiController::class, 'crearPost']);
Route::get('/api/postBy/{id}', [PostRestApiController::class, 'buscarById']);
Route::get('/api/deletePost/{id}', [PostRestApiController::class, 'borrarPost']);
Route::post('/api/postUpdate', [PostRestApiController::class, 'modificarPost']);