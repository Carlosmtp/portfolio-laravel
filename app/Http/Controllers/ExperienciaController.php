<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExperienciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $experiencias = Experiencia::paginate();

        return view('experiencia.index', compact('experiencias'))
            ->with('i', ($request->input('page', 1) - 1) * $experiencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $experiencia = new Experiencia();

        return view('experiencia.create', compact('experiencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienciaRequest $request): RedirectResponse
    {
        Experiencia::create($request->validated());

        return Redirect::route('experiencias.index')
            ->with('success', 'Experiencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $experiencia = Experiencia::findOrFail($id);

        return view('experiencia.show', compact('experiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $experiencia = Experiencia::findOrFail($id);

        return view('experiencia.edit', compact('experiencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienciaRequest $request, Experiencia $experiencia): RedirectResponse
    {
        $experiencia->update($request->validated());

        return Redirect::route('experiencias.index')
            ->with('success', 'Experiencia actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Experiencia::findOrFail($id)->delete();

        return Redirect::route('experiencias.index')
            ->with('success', 'Experiencia eliminada correctamente');
    }
}
