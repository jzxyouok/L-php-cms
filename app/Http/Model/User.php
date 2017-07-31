<?php

namespace App\Http\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $table='users';
  protected $primarykey='id';
  public $timestamps=true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['query_string'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
