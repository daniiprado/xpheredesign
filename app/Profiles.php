<?php

namespace xpheredesign;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{

    protected $table = 'tbl_Profiles';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'profile_user_id',
      'profile_pic',
      'profile_description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
