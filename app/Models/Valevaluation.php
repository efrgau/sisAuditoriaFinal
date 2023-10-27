<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Valevaluation
 *
 * @property $id
 * @property $nombreValorcat
 * @property $categoryId
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property Evaluation[] $evaluations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Valevaluation extends Model
{
    
    static $rules = [
		'nombreValorcat' => 'required',
		'categoryId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreValorcat','categoryId'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categoryId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluations()
    {
        return $this->hasMany('App\Models\Evaluation', 'valEvaluationId', 'id');
    }
    

}
