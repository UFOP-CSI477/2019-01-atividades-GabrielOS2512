<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  protected $fillable = [ 'user_id', 'procedure_id','date'  ];

  public function User() {
    return $this->belongsTo('App\User');
  }

  public function Procedure() {
    return $this->belongsTo('App\Procedure');
  }
}
