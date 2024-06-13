<?php

namespace App\Http\Controllers;


use App\Models\Proyecto;

class ProyectoViewController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate(4);

        return view('proyectos', compact('proyectos'));
    }
}
