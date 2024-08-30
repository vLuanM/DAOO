<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        // Retorna a view com todos os serviços
        $servicos = Servico::all();
        return view('servico.index', compact('servicos'));
    }

    public function create()
    {
        // Retorna a view para criar um novo serviço
        return view('servico.create');
    }

    public function store(Request $request)
    {
        // Valida e cria um novo serviço
        $request->validate([
            'descricao' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Servico::create($request->all());

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço criado com sucesso!');
    }

    public function show($id)
    {
        // Retorna a view com os detalhes de um serviço específico
        $servico = Servico::findOrFail($id);
        return view('servico.show', compact('servico'));
    }

    public function edit($id)
    {
        // Retorna a view para editar um serviço específico
        $servico = Servico::findOrFail($id);
        return view('servico.edit', compact('servico'));
    }

    public function update(Request $request, $id)
    {
        // Valida e atualiza os dados do serviço
        $request->validate([
            'descricao' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $servico = Servico::findOrFail($id);
        $servico->update($request->all());

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);
        $servico->delete();

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço excluído com sucesso!');
    }
}
