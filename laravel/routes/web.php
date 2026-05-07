<?php

use Illuminate\Support\Facades\Route;
{
Route::match(['get', 'post'], 'post/edit/{id}', 'PostController@editPost');

}
?>
