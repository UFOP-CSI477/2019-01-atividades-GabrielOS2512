<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
  protected $fillable = [ 'name', 'price', 'user_id' ];

  public function Test(){
    return $this->hasMany('App\Test');
  }

  public function User() {
    return $this->belongsTo('App\User');
  }
}
