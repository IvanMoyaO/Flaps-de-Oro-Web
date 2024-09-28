<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Titulacion;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function borrar_curso(int $id)
    {
        $curso = Curso::findOrFail($id);

        if($curso->profesores != null){
            foreach($curso->profesores as $profesor){
                $profesor->delete();
            }
        }

        $curso->delete();

        session()->flash('success', 'Titulacion eliminada');
        return redirect('/admin');
    }
}
