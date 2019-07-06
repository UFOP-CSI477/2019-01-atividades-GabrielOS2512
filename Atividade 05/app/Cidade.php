<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  protected $fillable = [ 'nome', 'estado_id' ];

  // Lista de campos protegidos - não podem ser atualizados diretamente
  // protected $guarded = [ 'senha' ];

  public function estado() {
      return $this->belongsTo('App\Estado');
  }
}
