<?php

namespace App;

use App\Scopes\AgeScope;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  
  protected static function boot()
  {
    parent::boot();

    static::addGlobalScope(new AgeScope);
  }
}
?>