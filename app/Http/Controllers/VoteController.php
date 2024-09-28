<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\View\View;

class VoteController extends Controller
{
    public function show(): View
    {
        return view('vote');
    }

    public function vote(int $id)
    {
        $prof = Profesor::findOrFail($id);

        if($prof->elegible == false) {
            session()->flash('error', 'No puedes votar a este!');
            return redirect('/votar');
        }

        $prof->votos = ($prof->votos + 1);
        $prof->save();

        session()->flash('success', 'Has votado a:' . $prof->nombre);
        return redirect('/votar');
    }

}
