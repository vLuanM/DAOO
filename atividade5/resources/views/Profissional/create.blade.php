<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Profissional</title>
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
        <h1>Criar Novo Profissional</h1>

        <form action="{{ route('profissionais.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="mei">MEI</label>
                <input type="text" name="mei" id="mei" required>
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>

            <button type="submit">Criar Profissional</button>
        </form>
    </div>
</body>
</html>
