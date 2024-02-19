<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Verificar se o usuário está autenticado
        if (auth()->check()) {
            // Se autenticado, redirecionar para o dashboard
            return redirect()->route('dashboard');
        } else {
            // Se não autenticado, renderizar a página de boas-vindas
            return view('welcome');
        }
    }
}
