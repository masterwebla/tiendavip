<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriasController extends Controller
{
    //Funcionar para listar registros
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index',compact('categorias'));
    }

    //Función para mostrar un formulario para crear
    public function create()
    {
        return view('admin.categorias.crear');
    }

    //Función para guardar un registro
    public function store(Request $request)
    {
        //Validar la información recibida
        $request->validate([
            'nombre' => 'required|unique:categorias|max:255',
            'descripcion' => 'required',
        ]);

        //Guardar la información
        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('categorias.index');
    }

    //Función para mostrar datos de un registro
    public function show($id)
    {
        //
    }

    //Función para mostrar el formulario de edición de un registro
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categorias.editar',compact('categoria'));
    }

    //Función para actualizar un registro
    public function update(Request $request, $id)
    {
        //Validar información
         $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        //Actualizar la información
         $categoria = Categoria::find($id);
         $categoria->nombre = $request->nombre;
         $categoria->descripcion = $request->descripcion;
         $categoria->save();

         return redirect()->route('categorias.index');
    }

    //Función para eliminar un registro
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
