<?php

use App\Http\Controllers\CidadeController;
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

Route::get('/', [CidadeController::class, 'listCidades'])->name('index');

Route::get('adicionar', [CidadeController::class, 'addCidade'])->name('adicionar.cidade');
Route::post('cidade/salvar', [CidadeController::class, 'storeCidade'])->name('salvar.cidade');
Route::get('cidade/{idCidade}', [CidadeController::class, 'destroyCidade'])->name('deletar.cidade');