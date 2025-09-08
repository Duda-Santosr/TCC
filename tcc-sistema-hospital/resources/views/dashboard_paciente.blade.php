<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Paciente - TriÁgil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { margin: 0; padding: 0; font-family: Arial, sans-serif; height: 100%; }
        .container-dashboard { background: url("{{ asset('imagens/fundo_dashboard.jpg') }}") no-repeat center center; background-size: cover; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; }
        .btn-option { background-color: #3a0ca3; color: white; font-weight: bold; padding: 15px 30px; margin: 10px 0; border-radius: 30px; font-size: 1.2rem; text-decoration: none; transition: 0.3s; }
        .btn-option:hover { background-color: #2c0780; color: #fff; }
        .logout-btn { background-color: #ff0000; }
        .logout-btn:hover { background-color: #cc0000; }
        .alert-success { position: absolute; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; }
    </style>
</head>
<body>
<div class="container-dashboard">
    @if(session('success'))
        <div class="alert alert-success text-center w-50">{{ session('success') }}</div>
    @endif

    <a href="{{ route('guia.primeiro.socorros') }}" class="btn-option w-50 text-center">Guia de Primeiro Socorros</a>
    <a href="{{ route('formulario.pre.triagem') }}" class="btn-option w-50 text-center">Formulário Pré-Triagem</a>

    <form action="{{ route('paciente.logout') }}" method="POST" class="w-50 mt-4 text-center">
        @csrf
        <button type="submit" class="btn btn-option logout-btn w-100">Sair</button>
    </form>
</div>
</body>
</html>