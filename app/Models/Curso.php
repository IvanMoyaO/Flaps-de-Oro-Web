<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'abreviatura',
        'titulacion_id'
    ];

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'abreviatura' => 'required|string|max:255',
    ];

    public function titulacion()
    {
       return $this->belongsTo(Titulacion::class);
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class);
    }

}
