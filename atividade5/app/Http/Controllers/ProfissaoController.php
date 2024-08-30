<?php

namespace App\Http\Controllers;

use App\Models\Profissao;
use Illuminate\Http\Request;

class ProfissaoController extends Controller
{
    public function index()
    {
        // Retorna a view com todas as profissões
        $profissoes = Profissao::all();
        return view('profissao.index', compact('profissoes'));
    }

    public function create()
    {
        // Retorna a view para criar uma nova profissão
        return view('profissao.create');
    }

    public function store(Request $request)
    {
        // Valida e cria uma nova profissão
        $request->validate([
            'servico' => 'required|string|max:255',
        ]);

        Profissao::create($request->all());

        return redirect()->route('profissoes.index')
            ->with('success', 'Profissão criada com sucesso!');
    }

    public function show($id)
    {
        // Retorna a view com os detalhes de uma profissão específica
        $profissao = Profissao::findOrFail($id);
        return view('profissao.show', compact('profissao'));
    }

    public function edit($id)
    {
        // Retorna a view para editar uma profissão específica
        $profissao = Profissao::findOrFail($id);
        return view('profissao.edit', compact('profissao'));
    }

    public function update(Request $request, $id)
    {
        // Valida e atualiza os dados da profissão
        $request->validate([
            'servico' => 'required|string|max:255',
        ]);

        $profissao = Profissao::findOrFail($id);
        $profissao->update($request->all());

        return redirect()->route('profissoes.index')
            ->with('success', 'Profissão atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->delete();

        return redirect()->route('profissoes.index')
            ->with('success', 'Profissão excluída com sucesso!');
    }
}
