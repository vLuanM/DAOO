<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ProfissaoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profissionais', [ProfissionalController::class, 'index'])->name('profissionais.index');

Route::get('/profissional/create', [ProfissionalController::class, 'create'])->name('profissional.create');

Route::post('/profissional', [ProfissionalController::class, 'store'])->name('profissional.store');

Route::get('/profissional/{id}', [ProfissionalController::class, 'show'])->name('profissional.show');

Route::get('/profissional/{id}/edit', [ProfissionalController::class, 'edit'])->name('profissional.edit');

Route::post('/profissional/{id}/edit', [ProfissionalController::class, 'update'])->name('profissional.update');

Route::delete('/profissional/{id}', [ProfissionalController::class, 'destroy'])->name('profissional.destroy');



Route::get('/profissoes', [ProfissaoController::class, 'index'])->name('profissoes.index');

Route::get('/profissao/create', [ProfissaoController::class, 'create'])->name('profissao.create');

Route::post('/profissao', [ProfissaoController::class, 'store'])->name('profissao.store');

Route::get('/profissao/{id}', [ProfissaoController::class, 'show'])->name('profissao.show');

Route::get('/profissao/{id}/edit', [ProfissaoController::class, 'edit'])->name('profissao.edit');

Route::post('/profissao/{id}/edit', [ProfissaoController::class, 'update'])->name('profissao.update');

Route::delete('/profissao/{id}', [ProfissaoController::class, 'destroy'])->name('profissao.destroy');



Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');

Route::get('/servico/create', [ServicoController::class, 'create'])->name('servico.create');

Route::post('/servico', [ServicoController::class, 'store'])->name('servico.store');

Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');

Route::get('/servico/{id}/edit', [ServicoController::class, 'edit'])->name('servico.edit');

Route::post('/servico/{id}/edit', [ServicoController::class, 'update'])->name('servico.update');

Route::delete('/servico/{id}', [ServicoController::class, 'destroy'])->name('servico.destroy');

include_once __DIR__."/querys.php";
