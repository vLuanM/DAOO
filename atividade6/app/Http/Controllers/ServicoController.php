<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Profissao;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function index()
    {
        // Retornar a view com todos os serviços
        return view('servico.index', [
            'servicos' => Servico::all()
        ]);
    }

    public function create()
    {
        // Certifique-se de passar a lista de profissões para a view
        $profissoes = Profissao::all();
        return view('servico.create', compact('profissoes'));
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if(Servico::create($dados)){
            return redirect('/servicos');
        } else {
            dd("Erro ao criar serviço!");
        }
    }

    public function show($id)
    {
        return view('servico.show', [
            'servico' => Servico::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view ('servico.edit', [
            'servico' => Servico::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();

        $servico = Servico::findOrFail($id);
        $servico->update($dados);

        return redirect('/servicos');
    }

    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);

        $servico->delete();

        return redirect('/servicos');
    }
}
