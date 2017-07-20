<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $primarykey='id';
    public $timestamps=true;

  protected $guarded = [];
}
