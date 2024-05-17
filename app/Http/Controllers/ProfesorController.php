<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::orderby('id', 'asc')->get();
        return view('profesors.listar', compact('profesores'));
    } 
  
    public function create(){
        return view('profesors.create');
    }
  
    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->direccion = $request->direccion;
        $profesor->ciudad = $request->ciudad;
        $profesor->departamento = $request->departamento;
        $profesor->save();
        return redirect()->route('profesor.index');
    }

    public function show(Profesor $profesor){
        return view('profesors.show',compact('profesor'));
    }

    public function destroy (Profesor $profesor){
        $profesor->delete();
        return redirect()->route('profesor.index');
    }

      //Edit
    public function edit(Profesor $profesor){
        return view('profesors.editar', compact('profesor'));
    }

      //Update
    public function update(Request $request, Profesor $profesor){
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->direccion = $request->direccion;
        $profesor->ciudad = $request->ciudad;
        $profesor->departamento = $request->departamento;
        $profesor->save();
        return redirect()->route('profesor.index');
    }
}
