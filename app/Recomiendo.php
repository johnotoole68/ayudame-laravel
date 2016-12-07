<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomiendo extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function recomendar()
  {
    return $this->hasMany('App\Recomendaciones');
  }

}
