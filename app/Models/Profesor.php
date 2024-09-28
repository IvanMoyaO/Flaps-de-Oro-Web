<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'curso_id',
        'elegible',
        'votos'
    ];

    protected $rules = [
        'nombre' => 'required|string|max:255',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
