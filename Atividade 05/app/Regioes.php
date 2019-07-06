<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regioes extends Model
{
    protected $fillable = [ 'nome', 'abreviacao' ];

    public function estados(){
      return $this->hasMany('App\Estado');
    }
}
