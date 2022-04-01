<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {   
        // Pagina de inicio
        $datos = Personas::orderBy('apellido_paterno', 'asc')->paginate(4);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        // El formulario donde nosotros agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        // Sirve para guardar datos en la base de datos
        $personas = new Personas();
        $personas->apellido_paterno = $request->post('apellido_paterno');
        $personas->apellido_materno = $request->post('apellido_materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with("success", "Agregado con exito!");
    }


    public function show($id)
    {
        // Servira para obtener un refistro de nuestra tabla
        $personas = Personas::find($id); 
        return view('eliminar', compact('personas'));
    }

    public function edit($id)
    {
        // Este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
        $personas = Personas::find($id); 
        return view('actualizar', compact('personas'));
    }

    public function update(Request $request, $id)
    {
        // Este metodo actualiza los datos en la base de datos
        $personas = Personas::find($id);
        $personas->apellido_paterno = $request->post('apellido_paterno');
        $personas->apellido_materno = $request->post('apellido_materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        // Elimina un registro 
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route('personas.index')->with("success", "Eliminado con exito!");
    }
}
