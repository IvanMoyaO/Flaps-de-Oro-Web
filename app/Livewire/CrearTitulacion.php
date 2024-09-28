<?php

namespace App\Livewire;

use App\Models\Titulacion;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CrearTitulacion extends Component
{

    #[Validate('required|min:5|max:255')]
    public $nombre = '';

    #[Validate('required|max:255')]
    public $abreviatura = '';

    public function save()
    {
        $this->validate();

        Titulacion::create($this->all());
        session()->flash('success', 'Titulación ' . $this->nombre . ' (' . $this->abreviatura . ')' . ' creada');

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.crear-titulacion');
    }
}
