<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $NombreCategoria
 * @property $NombreISO
 * @property $created_at
 * @property $updated_at
 *
 * @property Valevaluation[] $valevaluations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'NombreCategoria' => 'required',
		'NombreISO' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreCategoria','NombreISO'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valevaluations()
    {
        return $this->hasMany('App\Models\Valevaluation', 'categoryId', 'id');
    }
    

}
