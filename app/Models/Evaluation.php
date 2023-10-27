<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 *
 * @property $id
 * @property $valEvaluationId
 * @property $value
 * @property $created_at
 * @property $updated_at
 *
 * @property Valevaluation $valevaluation
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluation extends Model
{
    
    static $rules = [
		'valEvaluationId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['valEvaluationId','value'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function valevaluation()
    {
        return $this->hasOne('App\Models\Valevaluation', 'id', 'valEvaluationId');
    }
    

}
