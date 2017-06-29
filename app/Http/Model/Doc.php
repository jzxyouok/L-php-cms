<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table='docs';
    protected $primarykey='id';
    public $timestamps=true;
}
