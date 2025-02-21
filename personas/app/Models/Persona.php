<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $condiciones_id
 * @property $nombre
 * @property $apellidos
 * @property $dni
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Condicione $condicione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['condiciones_id', 'nombre', 'apellidos', 'dni', 'telefono', 'direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function condicione()
    {
        return $this->belongsTo(\App\Models\Condicione::class, 'condiciones_id', 'id');
    }
    
}
