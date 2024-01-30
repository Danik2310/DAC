<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profesores;

class ProfesoresController extends Controller
{
    public function index()
    {       
         //Con paginación
         $profesores = Profesores::paginate(5);
         return view('profesores.index',compact('profesores'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }
    public function create()
    {
        return view('profesores.crear');
    }
    public function store(Request $request)
    {
        request()->validate([
            
            'nombre' => 'required' ,	
            'apellido' => 'required',	
            'materia' => 'required',	
            'estado'=> 'required'
            
       ]);
    
        Profesores::create($request->all());
    
        return redirect()->route('profesores.index');
    }
}
