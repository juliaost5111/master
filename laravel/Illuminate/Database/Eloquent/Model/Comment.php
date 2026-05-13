<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable()
    {
      return $this->morphTo('', 'tag', 'id_pn');
    }
  }
  
  class Post extends Model
  {
    public function comments()
    {
      return $this->morphMany('App\Comment', '', 'tag', 'id_pn');
    }
  }
  
  class Video extends Model
  {
    public function comments()
    {
      return $this->morphMany('App\Comment', '', 'tag', 'id_pn');
    }
  }
?>