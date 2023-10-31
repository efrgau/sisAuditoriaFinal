<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategory
 *
 * @property $id
 * @property $categoryId
 * @property $abrev
 * @property $detail
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subcategory extends Model
{

  static $rules = [
    'categoryId' => 'required',
    'abrev' => 'required',
    'detail' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['categoryId', 'abrev', 'detail'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  // public function category()
  //{
  //return $this->hasOne('App\Models\Category', 'id', 'categoryId');
  //}

  public function category()
  {
    return $this->belongsTo('App\Models\Category');
  }
  public function valevaluations()
  {
    return $this->hasMany('App\Models\Valevaluation', 'subcategoryId');
  }
}
