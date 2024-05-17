<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Models\Camionero;
use Illuminate\Http\Request;

class CamioneroController extends Controller
{
    public function index(){
        $camioneros = Camionero::orderby('id', 'asc')->get();
        return view('camioneros.listar', compact('camioneros'));
    }

    public function create(){
        $camiones = Camion::orderBy('id', 'asc')->get();
        return view('camioneros.create', compact('camiones'));
    }

    public function store(Request $request){
        $camionero = new Camionero();
        $camionero->nombre = $request->nombre;
        $camionero->direccion = $request->direccion;
        $camionero->poblacion = $request->poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->salario = $request->salario;
        $camionero->save();
        $camionero->camions()->attach($request->camion);
        return redirect()->route('camionero.index');
    }

    public function show(Camionero $camionero){
        return view('camioneros.show',compact('camionero'));
    }

    public function destroy (Camionero $camionero){
        $camionero->delete();
        return redirect()->route('camionero.index');
    }

      //Edit
    public function edit(Camionero $camionero){
        $camiones = Camion::orderBy('id', 'asc')->get();
        return view('camioneros.editar', compact('camionero', 'camiones'));
    }

      //Update
    public function update(Request $request, Camionero $camionero){
        $camionero->nombre = $request->nombre;
        $camionero->direccion = $request->direccion;
        $camionero->poblacion = $request->poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->salario = $request->salario;
        $camionero->save();
        return redirect()->route('camionero.index');
    }
}
