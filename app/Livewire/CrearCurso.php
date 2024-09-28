<?php

namespace App\Livewire;

use App\Models\Curso;
use App\Models\Titulacion;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CrearCurso extends Component
{

    #[Validate('required|min:5|max:255')]
    public $nombre = '';

    #[Validate('required|max:255')]
    public $abreviatura = '';

    #[Validate('required|max:255')]
    public $titulacion_id = '';

    public function save()
    {
        $this->validate();

        Curso::create($this->all());
        session()->flash('success', 'Curso ' . $this->nombre . ' (' . $this->abreviatura . ')' . ' creado');

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.crear-curso');
    }
}
