<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {   
        // Pagina de inicio
        $datos = Personas::all();
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


    public function show(Personas $personas)
    {
        // Servira para obtener un refistro de nuestra tabla
        return view('eliminar');
    }

    public function edit(Personas $personas)
    {
        // Este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
        return view('actualizar');
    }

    public function update(Request $request, Personas $personas)
    {
        // Este metodo actualiza los datos en la base de datos
    }

    public function destroy(Personas $personas)
    {
        // Elimina un registro 
    }
}
