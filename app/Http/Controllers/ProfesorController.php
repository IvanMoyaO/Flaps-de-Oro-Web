<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Titulacion;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function borrar_profesor(int $id)
    {
        $profesor = Profesor::findOrFail($id);

        $profesor->delete();

        session()->flash('success', 'profesor eliminado');
        return redirect('/admin');
    }

    public function actualizar_profesor(int $id)
    {
        $profesor = Profesor::findOrFail($id);

        if($profesor->elegible == 1){
            $profesor->elegible = 0;
        }else{
            $profesor->elegible = 1;
        }

        $profesor->save();

        session()->flash('success', 'Profesor actualizado');
        return redirect('/admin');
    }
}
