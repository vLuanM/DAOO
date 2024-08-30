<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Serviço</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Serviço</h1>

        <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" value="{{ $servico->descricao }}" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" id="preco" value="{{ $servico->preco }}" step="0.01" required>
            </div>

            <button type="submit">Atualizar Serviço</button>
        </form>
    </div>
</body>
</html>
