<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Serviço</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Serviço</h1>

        <form action="{{ route('servicos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" id="preco" step="0.01" required>
            </div>

            <button type="submit">Criar Serviço</button>
        </form>
    </div>
</body>
</html>
