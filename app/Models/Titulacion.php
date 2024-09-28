<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'abreviatura'
    ];

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'abreviatura' => 'required|string|max:255',
    ];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }


}
