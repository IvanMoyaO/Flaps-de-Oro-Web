<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Titulacion;
use Illuminate\Http\Request;

class TitulacionController extends Controller
{
   public function borrar_titulacion(int $id)
   {
       $titulacion = Titulacion::findOrFail($id);

       if ($titulacion->cursos != null) {
           foreach ($titulacion->cursos as $curso) {
               foreach ($curso->profesores as $profesor) {
                   $profesor->delete();
               }
               $curso->delete();
           }
       }

       $titulacion->delete();

       session()->flash('success', 'Titulacion eliminada');
       return redirect('/admin');
   }
}
