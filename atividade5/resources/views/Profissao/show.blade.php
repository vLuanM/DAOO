<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Profissão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .details {
            margin-bottom: 20px;
        }
        .details label {
            font-weight: bold;
        }
        .details p {
            margin: 5px 0 15px;
            padding: 8px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        .action-buttons a, .action-buttons form {
            margin-right: 10px;
            display: inline-block;
        }
        .action-buttons form {
            margin: 0;
        }
        button {
            padding: 10px 15px;
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Profissão</h1>

        <div class="details">
            <label for="servico">Serviço:</label>
            <p>{{ $profissao->servico }}</p>
        </div>

        <div class="action-buttons">
            <a href="{{ route('profissoes.edit', $profissao->id) }}" class="btn btn-warning">Editar</a>

            <form action="{{ route('profissoes.destroy', $profissao->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>

            <a href="{{ route('profissoes.index') }}" class="btn btn-primary">Voltar à lista</a>
        </div>
    </div>
</body>
</html>
