<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class Signin_Social extends Model
{

  protected $table = 'tbl_Signin_Social';
  public $incrementing = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'network_user_id',
    'network_name',
    'network_user_fk',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
