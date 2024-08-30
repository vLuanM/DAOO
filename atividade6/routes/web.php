<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ProfissaoController;

Route::resource('servicos', ServicoController::class);


Route::resource('profissionais', ProfissionalController::class);


Route::get('/', function () {
    return view('welcome');
});

// PROFISSIONAIS

Route::get('/profissionais', [\App\Http\Controllers\ProfissionalController::class, 'index'])->name('profissionais.index');

Route::get('/profissional/create', [\App\Http\Controllers\ProfissionalController::class, 'create'])->name('profissional.create');

Route::post('/profissional', [\App\Http\Controllers\ProfissionalController::class, 'store'])->name('profissional.store');

Route::get('/profissional/{id}', [\App\Http\Controllers\ProfissionalController::class, 'show'])->name('profissional.show');

Route::get('/profissional/{id}/edit', [\App\Http\Controllers\ProfissionalController::class, 'edit'])->name('profissional.edit');

Route::post('/profissional/{id}/edit', [\App\Http\Controllers\ProfissionalController::class, 'update'])->name('profissional.update');

Route::delete('/profissional/{id}', [\App\Http\Controllers\ProfissionalController::class, 'destroy'])->name('profissional.destroy');


// SERVIÇOS


Route::get('/servicos', [\App\Http\Controllers\ServicoController::class, 'index'])->name('servicos.index');

Route::get('/servico/create', [\App\Http\Controllers\ServicoController::class, 'create'])->name('servico.create');

Route::post('/servico', [\App\Http\Controllers\ServicoController::class, 'store'])->name('servico.store');

Route::get('/servico/{id}', [\App\Http\Controllers\ServicoController::class, 'show'])->name('servico.show');

Route::get('/servico/{id}/edit', [\App\Http\Controllers\ServicoController::class, 'edit'])->name('servico.edit');

Route::post('/servico/{id}/edit', [\App\Http\Controllers\ServicoController::class, 'update'])->name('servico.update');

Route::delete('/servico/{id}', [\App\Http\Controllers\ServicoController::class, 'destroy'])->name('servico.destroy');


// PROFISSÕES



Route::get('/profissoes', [ProfissaoController::class, 'index'])->name('profissoes.index');

Route::get('/profissoes/create', [ProfissaoController::class, 'create'])->name('profissoes.create');

Route::post('/profissoes', [ProfissaoController::class, 'store'])->name('profissoes.store');

Route::get('/profissoes/{id}', [ProfissaoController::class, 'show'])->name('profissoes.show');

Route::get('/profissoes/{id}/edit', [ProfissaoController::class, 'edit'])->name('profissoes.edit');

Route::put('/profissoes/{id}', [ProfissaoController::class, 'update'])->name('profissoes.update');

Route::delete('/profissoes/{id}', [ProfissaoController::class, 'destroy'])->name('profissoes.destroy');
