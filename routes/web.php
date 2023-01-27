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

Route::controller(CidadeController::class)->group(function () {
    Route::get('/', 'listCidades')->name('index');
    Route::get('adicionar', 'addCidade')->name('adicionar.cidade');
    Route::post('cidade/salvar', 'storeCidade')->name('salvar.cidade');
    Route::get('cidade/{idCidade}', 'destroyCidade')->name('deletar.cidade');
    Route::get('/cidade/editar/{idCidade}', 'editCidade')->name('editar.cidade');
    Route::post('/cidade/editar/{idCidade}', 'editarCidade')->name('update.cidade');
});