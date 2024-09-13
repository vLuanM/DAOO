<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Serviço</title>
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
        .form-group input, .form-group select {
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
        .error {
            color: red;
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Serviço</h1>

        <div class="form-container">
            <form action="{{ route('servico.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="profissao_id">Profissão</label>
                    <select id="profissao_id" name="profissao_id" required>
                        <option value="">Selecione uma profissão</option>
                        @foreach ($profissoes as $profissao)
                            <option value="{{ $profissao->id }}" {{ old('profissao_id') == $profissao->id ? 'selected' : '' }}>
                                {{ $profissao->servico }}
                            </option>
                        @endforeach
                    </select>
                    @error('profissao_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" value="{{ old('descricao') }}" required>
                    @error('descricao')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" id="preco" name="preco" value="{{ old('preco') }}" required>
                    @error('preco')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit">Criar Serviço</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
