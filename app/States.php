<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
  protected $table = 'tbl_States';
  public $incrementing = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'state_id',
    'state_name',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
