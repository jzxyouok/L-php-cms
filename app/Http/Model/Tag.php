<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='tags';
    protected $primarykey='id';
    public $timestamps=true;

  protected $fillable = ['doc_id','tag'];

  public function findDocByTag()
  {
    return $this->belongsTo('App\Http\Model\Doc','doc_id','id');
  }
}
