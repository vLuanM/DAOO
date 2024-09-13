<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Profissão</title>
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
        .profession-details {
            margin-bottom: 20px;
        }
        .profession-details h2 {
            margin-top: 0;
        }
        .profession-details p {
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
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Profissão</h1>

        <div class="profession-details">
            <h2>{{ $profissao->servico }}</h2>
            <p><strong>Profissional:</strong> {{ $profissao->profissional->nome }}</p>
            <p><strong>Criado em:</strong> {{ $profissao->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $profissao->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div>
            <h2>Serviços Relacionados</h2>
            @if($profissao->servicos->isEmpty())
                <p>Não há serviços relacionados a esta profissão.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Serviço</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profissao->servicos as $servico)
                            <tr>
                                <td>{{ $servico->id }}</td>
                                <td>{{ $servico->nome }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <div class="action-buttons">
            <a href="{{ route('profissoes.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </div>
    </div>
</body>
</html>
