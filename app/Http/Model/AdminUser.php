<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table='admin_users';
    protected $primarykey='id';
    public $timestamps=false;
}
