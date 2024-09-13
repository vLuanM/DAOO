<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Profissional</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profissional-details {
            margin-bottom: 20px;
        }
        .profissional-details h2 {
            margin-top: 0;
        }
        .profissional-details p {
            margin: 5px 0;
        }
        .action-buttons a, .action-buttons form {
            margin-right: 10px;
        }
        .action-buttons form {
            display: inline;
        }
        .action-buttons button {
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            color: white;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-edit:hover {
            background-color: #0056b3;
        }
        .btn.btn-danger {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .profissoes-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .profissoes-table th, .profissoes-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .profissoes-table th {
            background-color: #f2f2f2;
        }
        .profissoes-table td a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Profissional</h1>

        <div class="profissional-details">
            <h2>{{ $profissional->nome }}</h2>
            <p><strong>Email:</strong> {{ $profissional->email }}</p>
            <p><strong>MEI:</strong> {{ $profissional->mei }}</p>
            <p><strong>Criado em:</strong> {{ $profissional->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $profissional->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="action-buttons">
            <a href="{{ route('profissionais.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
            <a href="{{ route('profissional.edit', $profissional->id) }}" class="btn btn-edit">Editar</a>
            <form action="{{ route('profissional.destroy', $profissional->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>

        <h2>Profissões Associadas</h2>
        @if ($profissional->profissoes->isEmpty())
            <p>Não há profissões associadas a este profissional.</p>
        @else
            <table class="profissoes-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Profissão</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profissional->profissoes as $profissao)
                        <tr>
                            <td>{{ $profissao->id }}</td>
                            <td>{{ $profissao->nome }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('profissao.show', $profissao->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('profissao.edit', $profissao->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('profissao.destroy', $profissao->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
