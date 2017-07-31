<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class userGroup extends Model
{
    protected $table='user_groups';
    protected $primarykey='id';
    public $timestamps=true;
}
