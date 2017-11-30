<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil;

class PerfilesController extends Controller
{
    //Funcionar para listar registros
    public function index()
    {
        $perfiles = Perfil::all();
        return view('admin.perfiles.index',compact('perfiles'));
    }

    //Función para mostrar un formulario para crear
    public function create()
    {
        return view('admin.perfiles.crear');
    }

    //Función para guardar un registro
    public function store(Request $request)
    {
        //Validar la información recibida
        $request->validate([
            'nombre' => 'required|unique:perfiles|max:255',
        ]);

        //Guardar la información
        Perfil::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('perfiles.index');
    }

    //Función para mostrar datos de un registro
    public function show($id)
    {
        //
    }

    //Función para mostrar el formulario de edición de un registro
    public function edit($id)
    {
        $perfil = Perfil::find($id);
        return view('admin.perfiles.editar',compact('perfil'));
    }

    //Función para actualizar un registro
    public function update(Request $request, $id)
    {
        //Validar información
         $request->validate([
            'nombre' => 'required|unique:perfiles|max:255',
        ]);

        //Actualizar la información
         $perfil = Perfil::find($id);
         $perfil->nombre = $request->nombre;
         $perfil->save();

         return redirect()->route('perfiles.index');
    }

    //Función para eliminar un registro
    public function destroy($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();

        return redirect()->route('perfiles.index');
    }
}
