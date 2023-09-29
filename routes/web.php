<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryRestApiController;
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

Route::get('/api/categorias', [CategoryRestApiController::class, 'index']);
Route::post('/api/categoriasCreate', [CategoryRestApiController::class, 'crearCategory']);
Route::get('/api/categoryBy/{id}', [CategoryRestApiController::class, 'buscarById']);
Route::get('/api/deleteCategory/{id}', [CategoryRestApiController::class, 'borrarCategory']);
Route::post('/api/categoriasUpdate', [CategoryRestApiController::class, 'modificarCategory']);
