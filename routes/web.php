<?php

use App\Http\Controllers\CategoriaController;
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

Route::get('/', function () {
    return view('inicio');
})->name("inicio");

Route::prefix('categorias')->group(function(){
    Route::get('/', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/agregar', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::get('/editar', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::get('/eliminar', [CategoriaController::class, 'show'])->name('categorias.show');
});

Route::prefix('contactos')->group(function(){
    
});