<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Experiencia extends Model
{
    protected $fillable = [
        'puesto', 'empresa', 'descripcion', 'fecha_inicio', 'fecha_fin'
    ];

    // Mutator para fecha_inicio
    public function setFechaInicioAttribute($value)
    {
        if ($value) {
            $this->attributes['fecha_inicio'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    // Accessor para fecha_inicio
    public function getFechaInicioAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    // Mutator para fecha_fin
    public function setFechaFinAttribute($value)
    {
        if ($value) {
            $this->attributes['fecha_fin'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    // Accessor para fecha_fin
    public function getFechaFinAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d-m-Y') : null;
    }
}
