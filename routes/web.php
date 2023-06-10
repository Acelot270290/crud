<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('fornecedor');
Route::post('/fornecedores/adicionar', [App\Http\Controllers\FornecedoresController::class, 'adicionar'])->name('adicionarFornecedor');
Route::post('/fornecedores/update/{id}', [App\Http\Controllers\FornecedoresController::class, 'update'])->name('atualizarFornecedor');
Route::post('/fornecedores/delete/{id}', [App\Http\Controllers\FornecedoresController::class, 'delete'])->name('deleteFornecedor');
Route::get('/fornecedores/get/{id}', [App\Http\Controllers\FornecedoresController::class, 'getanexosfornecedores'])->name('fornecedores');
