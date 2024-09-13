<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Profissão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Nova Profissão</h1>

        <div class="form-container">
            <form action="{{ route('profissao.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="profissional_id">Profissional</label>
                    <select id="profissional_id" name="profissional_id" required>
                        <option value="">Selecione um profissional</option>
                        @foreach ($profissionais as $profissional)
                            <option value="{{ $profissional->id }}" {{ old('profissional_id') == $profissional->id ? 'selected' : '' }}>
                                {{ $profissional->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="servico">Serviço</label>
                    <input type="text" id="servico" name="servico" value="{{ old('servico') }}" required>
                </div>

                <div class="form-group">
                    <button type="submit">Criar Profissão</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
