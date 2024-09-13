<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Profissionais</title>
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
        <h1>Lista de Profissionais</h1>

        <a href="{{ route('profissional.create') }}" class="btn btn-primary">Criar Novo Profissional</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>MEI</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profissionais as $profissional)
                    <tr>
                        <td>{{ $profissional->id }}</td>
                        <td>{{ $profissional->nome }}</td>
                        <td>{{ $profissional->email }}</td>
                        <td>{{ $profissional->mei }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('profissional.show', $profissional->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('profissional.edit', $profissional->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('profissional.destroy', $profissional->id) }}" method="POST" style="display:inline;">
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
