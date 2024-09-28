<?php

namespace App\Livewire;

use App\Models\Curso;
use App\Models\Profesor;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CrearProfesor extends Component
{

    #[Validate('required|min:2|max:255')]
    public $nombre = '';

    public $votos = 0;
    public $elegible = true;

    #[Validate('required|max:255')]
    public $curso_id = '';

    public function save()
    {
        $this->validate();

        Profesor::create($this->all());
        session()->flash('success', 'Profesor ' . $this->nombre .  ' creado. Por defecto, ha recibido ' . $this->votos . ' votos, y ' . ($this->elegible ? "SÍ" : "NO") . ' es elegible');

        return $this->redirect('/admin');
    }

    public function render()
    {
        return view('livewire.crear-profesor');
    }
}
