<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index()
    {
        return view('profissional.index', [
            'profissionais' => Profissional::all()
        ]);
    }

    public function create()
    {
        return view('profissional.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        if (Profissional::create($dados)) {
            return redirect('/profissionais');
        } else {
            return back()->withErrors(['msg' => 'Erro ao criar profissional!']);
        }
    }

    public function show($id)
    {
        $profissional = Profissional::with(['profissoes', 'servicos'])->findOrFail($id);

        return view('profissional.show', [
            'profissional' => $profissional
        ]);
    }

    public function edit($id)
    {
        return view('profissional.edit', [
            'profissional' => Profissional::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $profissional = Profissional::findOrFail($id);
        $profissional->update($dados);

        return redirect('/profissionais');
    }

    public function destroy($id)
    {
        $profissional = Profissional::findOrFail($id);
        $profissional->delete();
        return redirect('/profissionais');
    }
}
