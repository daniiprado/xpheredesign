<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class Users_Types extends Model
{
  protected $table = 'tbl_Users_Types';
  public $incrementing = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'type_name',
    'type_description',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
