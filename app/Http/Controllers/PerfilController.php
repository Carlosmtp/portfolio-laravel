<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiencia;

class PerfilController extends Controller
{
    public function index()
    {
        $experiencias = Experiencia::orderBy('fecha_inicio', 'desc')->get();

        return view('perfil', compact('experiencias'));
    }
}
