<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;


class EstudianteController extends Controller
{
    public function index()
    {       
         //Con paginación
         $estudiantes = Estudiante::paginate(5);
         return view('estudiantes.index',compact('estudiantes'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }
    public function create()
    {
        return view('estudiantes.crear');
    }
    public function store(Request $request)
    {
        request()->validate([

            'nombre'=> 'required',
            'apellido'=> 'required',
            'año'=> 'required',
            'seccion' => 'required',
            'estado' => 'required'
        ]);
    
        Estudiante::create($request->all());
    
        return redirect()->route('estudiantes.index');
    }

}
