<?php

use Illuminate\Support\Facades\Route;
use App\Models\{Profissional, Profissao, Servico};

Route::prefix('query')->group(function () {

    Route::get('profissionais-com-mais-de-uma-profissao', function() {
        $result = Profissional::has('profissoes', '>', 1)->get();
        return response()->json($result);
    });

    Route::get('servicos-do-profissional/{profissionalId}', function($profissionalId) {
        $result = Servico::whereHas('profissao', function($q) use ($profissionalId) {
            $q->where('profissional_id', $profissionalId);
        })->get();
        return response()->json($result);
    });

    Route::get('profissionais-com-servicos-caros/{minPreco}', function($minPreco) {
        $result = Profissional::whereHas('profissoes.servicos', function($q) use ($minPreco) {
            $q->where('preco', '>=', $minPreco);
        })->get();
        return response()->json($result);
    });

    Route::get('contagem-servicos-do-profissional/{profissionalId}', function($profissionalId) {
        $result = Servico::whereHas('profissao', function($q) use ($profissionalId) {
            $q->where('profissional_id', $profissionalId);
        })->count();
        return response()->json($result);
    });

    Route::get('profissoes-e-servicos-do-profissional/{profissionalId}', function($profissionalId) {
        $result = Profissao::with('servicos')
            ->where('profissional_id', $profissionalId)
            ->get();
        return response()->json($result);
    });

});
