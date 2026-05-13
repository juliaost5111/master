<?php
 use app;
 
 App\User::find(1)->roles()->save($role, ['expires' => $expires]);


?>