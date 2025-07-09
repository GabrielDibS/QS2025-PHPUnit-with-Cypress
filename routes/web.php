<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\FinanceiroController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoas', PessoaController::class);
Route::resource('produtos', ProdutoController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/carrinho', [CarrinhoController::class, 'visualizar'])->name('carrinho.view');
    Route::post('/carrinho/adicionar/{produtoId}', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
    Route::delete('/carrinho/remover/{itemId}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
});

Route::get('/empresas/criar', [EmpresaController::class, 'criar'])->name('empresas.criar');
Route::post('/empresas/salvar', [EmpresaController::class, 'salvar'])->name('empresas.salvar');
Route::get('/empresas', [EmpresaController::class, 'listar'])->name('empresas.listar');

Route::post('/produtos/{produtoId}/vincular-empresa', [ProdutoController::class, 'vincularEmpresa'])->name('produtos.vincularEmpresa');

Route::get('/gerentes/criar', [GerenteController::class, 'criar'])->name('gerentes.criar');
Route::post('/gerentes/salvar', [GerenteController::class, 'salvar'])->name('gerentes.salvar');
Route::get('/gerentes', [GerenteController::class, 'listar'])->name('gerentes.listar');
Route::get('/gerentes/{id}/editar', [GerenteController::class, 'editar'])->name('gerentes.editar');
Route::put('/gerentes/{id}/atualizar', [GerenteController::class, 'atualizar'])->name('gerentes.atualizar');
Route::delete('/gerentes/{id}/deletar', [GerenteController::class, 'deletar'])->name('gerentes.deletar');

Route::resource('financeiro', FinanceiroController::class);
Route::get('/financeiro', [FinanceiroController::class, 'x']);
Route::post('/financeiro', [App\Http\Controllers\FinanceiroController::class, 'store'])->name('financeiro.store');
Route::put('/financeiro/{id}', [FinanceiroController::class, 'update']);
Route::delete('/financeiro/{id}', [FinanceiroController::class, 'destroy']);