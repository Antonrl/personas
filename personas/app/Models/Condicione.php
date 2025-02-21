<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condicione
 *
 * @property $nombre
 * @property $descripcion
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona[] $personas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Condicione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany(\App\Models\Persona::class, 'id', 'condiciones_id');
    }
    
}
