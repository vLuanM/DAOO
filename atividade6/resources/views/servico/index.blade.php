<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Serviços</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Serviços</h1>

        <a href="{{ route('servico.create') }}" class="btn btn-primary">Criar Novo Serviço</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Profissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->id }}</td>
                        <td>{{ $servico->descricao }}</td>
                        <td>{{ $servico->preco }}</td>
                        <td>{{ $servico->profissao->nome }}</td> <!-- Exibindo o nome da profissão associada -->
                        <td class="action-buttons">
                            <a href="{{ route('servico.show', $servico->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('servico.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('servico.destroy', $servico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
