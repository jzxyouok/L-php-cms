<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AdminUserGroup extends Model
{
    protected $table='admin_user_groups';
    protected $primarykey='id';
    public $timestamps=true;
}
