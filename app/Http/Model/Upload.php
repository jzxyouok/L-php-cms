<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table='uploads';
    protected $primarykey='id';
    public $timestamps=true;
}
