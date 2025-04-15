<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:personas,email',
        ]);

        Persona::create($request->all());
        
        return redirect()->route('personas.index')
            ->with('success', 'Persona creada exitosamente');
    }

    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:personas,email,' . $persona->id,
        ]);

        $persona->update($request->all());
        
        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada exitosamente');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        
        return redirect()->route('personas.index')
            ->with('success', 'Persona eliminada exitosamente');
    }
}