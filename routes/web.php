<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\Admin\ImovelController;
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
    // Rotas get
    Route::get('/', 'listCidades')->name('index');
    Route::get('adicionar', 'addCidade')->name('adicionar.cidade');
    Route::get('cidade/{idCidade}', 'destroyCidade')->name('deletar.cidade');
    Route::get('/cidade/editar/{idCidade}', 'editCidade')->name('editar.cidade');

    // Rotas post
    Route::post('cidade/salvar', 'storeCidade')->name('salvar.cidade');
    Route::post('/cidade/editar/{idCidade}', 'editarCidade')->name('update.cidade');
});

Route::controller(ImovelController::class)->group(function () {
    Route::get('imoveis', 'index')->name('imoveis.index');
    Route::get('imoveis/create', 'create')->name('imoveis.create');
    Route::post('imoveis/save', 'store')->name('imoveis.save');
});