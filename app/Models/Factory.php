<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factory
 *
 * @property $id
 * @property $userId
 * @property $NombreEmpresa
 * @property $FechaCreacionEmpresa
 * @property $NombreRepresentanteLegal
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factory extends Model
{
    
    static $rules = [
		'userId' => 'required',
		'NombreEmpresa' => 'required',
		'FechaCreacionEmpresa' => 'required',
		'NombreRepresentanteLegal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userId','NombreEmpresa','FechaCreacionEmpresa','NombreRepresentanteLegal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'userId');
    }
    

}
