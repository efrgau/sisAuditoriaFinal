<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 *
 * @property $id
 * @property $factoryId
 * @property $valEvaluationId
 * @property $value
 * @property $created_at
 * @property $updated_at
 *
 * @property Factory $factory
 * @property Valevaluation $valevaluation
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluation extends Model
{
    
    static $rules = [
		'factoryId' => 'required',
		'valEvaluationId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['factoryId','valEvaluationId','value'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factory()
    {
        return $this->hasOne('App\Models\Factory', 'id', 'factoryId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function valevaluation()
    {
        return $this->hasOne('App\Models\Valevaluation', 'id', 'valEvaluationId');
    }
    

}
