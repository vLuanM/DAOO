<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profissão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
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
        <h1>Editar Profissão</h1>

        <form action="{{ route('profissoes.update', $profissao->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="servico">Serviço</label>
                <input type="text" name="servico" id="servico" value="{{ $profissao->servico }}" required>
            </div>

            <button type="submit">Atualizar Profissão</button>
        </form>
    </div>
</body>
</html>
