<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $primarykey='id';
    public $timestamps=true;

  public function findDocByCategory()
  {
    return $this->hasMany('App\Http\Model\Doc','category','slug');
    }
}
