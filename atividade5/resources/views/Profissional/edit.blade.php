<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profissional</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
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
        <h1>Editar Profissional</h1>

        <form action="{{ route('profissionais.update', $profissional->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="mei">MEI</label>
                <input type="text" name="mei" id="mei" value="{{ $profissional->mei }}" required>
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $profissional->nome }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $profissional->email }}" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha (deixe em branco para não alterar)</label>
                <input type="password" name="senha" id="senha">
            </div>

            <button type="submit">Atualizar Profissional</button>
        </form>
    </div>
</body>
</html>
