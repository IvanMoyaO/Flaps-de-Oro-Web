<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Titulacion;
use Illuminate\View\View;

class VoteController extends Controller
{
    public function show(string $abreviatura): View
    {
        $titulacion = Titulacion::where('abreviatura', $abreviatura)->first();

        if($titulacion == null){
            session()->flash('error', 'No existe');
            return view('index');
        }

        return view('vote')->with('titulacion', $titulacion);
    }

    public function vote(int $id)
    {
        $prof = Profesor::findOrFail($id);

        if($prof->elegible == false) {
            session()->flash('error', 'No elegible');
            return redirect('/');
        }

        $prof->votos = ($prof->votos + 1);
        $prof->save();

        session()->flash('success', 'Has votado a:' . $prof->nombre);
        return redirect('/');
    }

}
