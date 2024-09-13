<?php

namespace App\Http\Controllers;

use App\Models\Profissao;
use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissaoController extends Controller
{
    public function index()
    {
        // Retorna a view com todas as profissões
        $profissoes = Profissao::with('profissional')->get();
        return view('profissao.index', compact('profissoes'));
    }

    /**
     * Mostra o formulário para criar uma nova profissão.
     */
    public function create()
    {
        // Retorna a view com o formulário para criar uma profissão
        $profissionais = Profissional::all();
        return view('profissao.create', compact('profissionais'));
    }

    /**
     * Armazena uma nova profissão no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $dados = $request ->all();
        if(Profissao::create($dados)){
            return redirect('/profissoes');
        } else dd('Erro ao criar profissão!');
    }
    public function show($id)
    {
        $profissao = Profissao::with('profissional')->findOrFail($id);
        return view('profissao.show', compact('profissao'));
    }

    public function edit($id)
    {
        return view('profissao.edit', [
            'profissao'=> Profissao::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $dados=$request->all();

        $profissao = Profissao::findOrFail($id);
        $profissao->update($dados);

        return redirect('/profissoes');
    }

    public function destroy($id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->delete();

        return redirect('/profissoes');
    }
}
