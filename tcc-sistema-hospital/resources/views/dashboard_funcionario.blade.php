<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Funcionário</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  <div class="max-w-6xl mx-auto p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-blue-600">Dashboard Funcionário</h1>
      <form action="{{ route('funcionario.logout') }}" method="POST">
        @csrf
        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Sair</button>
      </form>
    </div>

    <!-- Tabela de Pacientes -->
    <div class="bg-white shadow-lg rounded-xl p-4">
      <h2 class="text-xl font-semibold mb-4">Pacientes Cadastrados</h2>
      <table class="w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Nome</th>
            <th class="border border-gray-300 px-4 py-2">Email</th>
            <th class="border border-gray-300 px-4 py-2">Criado em</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $paciente)
          <tr class="text-center">
            <td class="border border-gray-300 px-4 py-2">{{ $paciente->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $paciente->name }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $paciente->email }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $paciente->created_at->format('d/m/Y') }}</td>
          </tr>
          @endforeach
          @if($pacientes->isEmpty())
          <tr>
            <td colspan="4" class="border border-gray-300 px-4 py-2 text-center">Nenhum paciente cadastrado.</td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>