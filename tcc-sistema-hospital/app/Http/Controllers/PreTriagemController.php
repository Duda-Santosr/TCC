<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreTriagemController extends Controller
{
    public function index()
    {
        return view('pre-triagem');
    }

    public function store(Request $request)
    {
        // Aqui você pode salvar os dados no banco
        // Por enquanto só vamos simular
        $data = $request->all();
        // dd($data); // para debugar

        return redirect()->route('formulario.pre.triagem')->with('success', 'Formulário enviado com sucesso!');
    }
}