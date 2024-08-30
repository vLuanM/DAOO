<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index()
    {
        // Retorna a view com todos os profissionais
        $profissionais = Profissional::all();
        return view('profissional.index', compact('profissionais'));
    }

    public function create()
    {
        // Retorna a view para criar um novo profissional
        return view('profissional.create');
    }

    public function store(Request $request)
    {
        // Valida e cria um novo profissional
        $request->validate([
            'mei' => 'required|string|max:255|unique:profissionais',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profissionais',
            'senha' => 'required|string|min:8',
        ]);

        Profissional::create($request->all());

        return redirect()->route('profissionais.index')
            ->with('success', 'Profissional criado com sucesso!');
    }

    public function show($id)
    {
        // Retorna a view com os detalhes de um profissional específico
        $profissional = Profissional::findOrFail($id);
        return view('profissional.show', compact('profissional'));
    }

    public function edit($id)
    {
        // Retorna a view para editar um profissional específico
        $profissional = Profissional::findOrFail($id);
        return view('profissional.edit', compact('profissional'));
    }

    public function update(Request $request, $id)
    {
        // Valida e atualiza os dados do profissional
        $request->validate([
            'mei' => 'required|string|max:255|unique:profissionais,mei,'.$id,
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profissionais,email,'.$id,
            'senha' => 'nullable|string|min:8',
        ]);

        $profissional = Profissional::findOrFail($id);
        $dados = $request->all();

        // Se a senha for enviada, criptografá-la antes de salvar
        if($request->filled('senha')) {
            $dados['senha'] = bcrypt($request->senha);
        } else {
            unset($dados['senha']);
        }

        $profissional->update($dados);

        return redirect()->route('profissionais.index')
            ->with('success', 'Profissional atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Deleta um profissional específico
        $profissional = Profissional::findOrFail($id);
        $profissional->delete();

        return redirect()->route('profissionais.index')
            ->with('success', 'Profissional excluído com sucesso!');
    }
}
