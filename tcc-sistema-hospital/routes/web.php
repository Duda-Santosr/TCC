<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // <--- Adicione esta linha
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\PacienteRegisterController;
use App\Http\Controllers\Auth\FuncionarioLoginController;
use App\Http\Controllers\PreTriagemController;

// ===============================
// Página inicial
// ===============================
Route::get('/', function () {
    return view('welcome');
});

// ===============================
// Identificação
// ===============================
Route::get('/identificacao', function () {
    return view('identificacao');
});

// ===============================
// Login e cadastro paciente
// ===============================
Route::get('/login/paciente', [AuthController::class, 'showLoginPaciente'])->name('paciente.login');
Route::post('/login/paciente', [AuthController::class, 'loginPaciente'])->name('paciente.login.submit');

Route::get('/register/paciente', [PacienteRegisterController::class, 'showRegistrationForm'])->name('paciente.register');
Route::post('/register/paciente', [PacienteRegisterController::class, 'register'])->name('paciente.register.submit');

Route::middleware('auth:paciente')->group(function () {
    Route::get('/dashboard-paciente', function () {
        $paciente = Auth::guard('paciente')->user(); // pega o paciente logado
        return view('dashboard_paciente', compact('paciente'));
    })->name('dashboard.paciente');

    Route::post('/logout/paciente', [AuthController::class, 'logout'])->name('paciente.logout');

    Route::get('/guia-primeiro-socorros', function () {
        return view('guia_primeiro_socorros');
    })->name('guia.primeiro.socorros');

    Route::get('/formulario-pre-triagem', function () {
        return view('formulario_pre_triagem');
    })->name('formulario.pre.triagem');
});

// ===============================
// Login e dashboard funcionário
// ===============================
Route::get('/login/funcionario', [FuncionarioLoginController::class, 'showLoginForm'])->name('login.funcionario');
Route::post('/login/funcionario', [FuncionarioLoginController::class, 'login'])->name('login.funcionario.submit');

Route::middleware('auth:funcionario')->group(function () {
    Route::get('/dashboard/funcionario', [FuncionarioLoginController::class, 'dashboard'])->name('dashboard.funcionario');
    Route::post('/logout/funcionario', [FuncionarioLoginController::class, 'logout'])->name('funcionario.logout');
});

// Página do formulário para pacientes
Route::get('/formulario-pre-triagem', [PreTriagemController::class, 'index'])->name('formulario.pre.triagem');
Route::post('/formulario-pre-triagem', [PreTriagemController::class, 'store'])->name('formulario.pre-triagem.store');

// Página do guia de primeiros socorros
Route::get('/guia-primeiros-socorros', function () {
    return view('guia-primeiros-socorros');
})->name('guia.primeiro.socorros');