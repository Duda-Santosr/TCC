<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Paciente;

class AuthController extends Controller
{
    // Mostrar formulário de login do paciente
    public function showLoginPaciente()
    {
        return view('login-paciente'); // resources/views/login-paciente.blade.php
    }

    // Mostrar formulário de login do funcionário
    public function showLoginFuncionario()
    {
        return view('login-funcionario'); // resources/views/login-funcionario.blade.php
    }

    // Processar login do paciente
    public function loginPaciente(Request $request)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|string',
        ]);

        $paciente = Paciente::where('cpf', $request->cpf)->first();

        if ($paciente && Hash::check($request->password, $paciente->password)) {
            Auth::guard('paciente')->login($paciente);
            return redirect()->route('dashboard.paciente')
                             ->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['cpf' => 'CPF ou senha inválidos'])
                     ->withInput($request->only('cpf'));
    }

    // Processar login do funcionário
    public function loginFuncionario(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request->username === "funcionario" && $request->password === "123456") {
            session(['funcionario_logado' => true]);
            return redirect()->route('dashboard.funcionario')
                             ->with('success', 'Login de funcionário realizado com sucesso!');
        }

        return back()->withErrors(['username' => 'Credenciais inválidas'])
                     ->withInput($request->only('username'));
    }

    // Logout do paciente e funcionário
    public function logout(Request $request)
    {
        Auth::guard('paciente')->logout();
        $request->session()->forget('funcionario_logado');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Você saiu com sucesso!');
    }

    public function dashboardFuncionario()
    {
        // Verifica se o funcionário está logado
        if (!session('funcionario_logado')) {
            return redirect()->route('login.funcionario')->with('error', 'Acesso negado!');
     }

        // Pega todos os pacientes cadastrados
        $pacientes = \App\Models\Paciente::all();

        // Retorna a view com os dados
        return view('dashboard_funcionario', compact('pacientes'));
    }

}