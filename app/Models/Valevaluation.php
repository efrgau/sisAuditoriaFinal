<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Valevaluation
 *
 * @property $id
 * @property $subcategoryId
 * @property $abrevalorcat
 * @property $nombreValorcat
 * @property $created_at
 * @property $updated_at
 *
 * @property Evaluation[] $evaluations
 * @property Subcategory $subcategory
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Valevaluation extends Model
{
    
    static $rules = [
		'subcategoryId' => 'required',
		'abrevalorcat' => 'required',
		'nombreValorcat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subcategoryId','abrevalorcat','nombreValorcat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluations()
    {
        return $this->hasMany('App\Models\Evaluation', 'valEvaluationId', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subcategory()
    {
        return $this->hasOne('App\Models\Subcategory', 'id', 'subcategoryId');
    }
    

}
