<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
  protected $table = 'tbl_Privacy';
  public $incrementing = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'privacy_id',
    'privacy_name',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
