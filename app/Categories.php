<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'tbl_Categories';
  public $incrementing = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'category_id',
    'category_name',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
