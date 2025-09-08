<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente - TriÁgil</title>
    <!-- Importando a fonte Unbounded do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Unbounded', sans-serif;
            background: url("{{ asset('../imagens/ficha.jpg') }}") no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card-register {
            width: 100%;
            max-width: 420px;
            padding: 30px;
            border-radius: 25px;
            background-color: rgba(19, 103, 138, 0.95); /* Cor #13678A */
            color: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .card-register h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 24px;
        }

        .form-control {
            border-radius: 25px;
            height: 45px;
            padding: 10px 20px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .form-check-label {
            margin-bottom: 0;
            font-size: 16px;
        }

        .btn-register {
            background-color: #322172; /* Cor #322172 */
            border: none;
            font-weight: bold;
            border-radius: 30px;
            transition: 0.3s;
            height: 45px;
            font-size: 16px;
            color: #fff;
        }

        .btn-register:hover {
            background-color: #0d0237ff;
            color:#fff;
        }

        .link-login {
            color: #7CDA77;
            text-decoration: underline;
            transition: 0.3s;
        }

        .link-login:hover {
            color: #1f8d19ff;
        }

        p.text-center {
            margin-top: 15px;
        }

        @media (max-width: 480px) {
            .card-register {
                padding: 25px 20px;
                border-radius: 20px;
            }

            .form-control {
                font-size: 15px;
            }

            .btn-register {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card-register">
            <h2>Cadastre-se</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('paciente.register.submit') }}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control mb-3" placeholder="Nome completo" value="{{ old('name') }}" required>
                <input type="text" name="cpf" class="form-control mb-3" placeholder="CPF" value="{{ old('cpf') }}" required>
                <input type="number" name="idade" class="form-control mb-3" placeholder="Idade" value="{{ old('idade') }}" required>
                <input type="email" name="email" class="form-control mb-3" placeholder="E-mail" value="{{ old('email') }}" required>
                <input type="text" name="telefone" class="form-control mb-3" placeholder="Telefone" value="{{ old('telefone') }}" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Senha" required>
                <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirme a senha" required>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="genero[]" value="Feminino" id="feminino">
                        <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="genero[]" value="Masculino" id="masculino">
                        <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="genero[]" value="Outro" id="outro">
                        <label class="form-check-label" for="outro">Outro</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-register w-100">Cadastrar</button>
            </form>

            <p class="text-center">
                Já tem conta? <a href="{{ url('/login/paciente') }}" class="link-login">Entre aqui</a>
            </p>
        </div>
    </div>
</body>
</html>
