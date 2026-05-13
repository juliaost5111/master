<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{ 
  protected $table = 'my_flights';
  const CREATED_AT = 'creation_date';
  const UPDATED_AT = 'last_update';
}
$comment = new App\Comment(['message' => 'Новый комментарий.']);
$post = App\Post::find(1);
$post->comments()->save($comment);

?>