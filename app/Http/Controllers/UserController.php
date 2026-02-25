<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return 'hello world';
    }

    public function all()
    {
        return 'hello all';
    }

     public function chelovek($name)
    {
        return $name;
    }

    public function full($name, $surname)
    {
        return $name.' '.$surname;
    }

     public function gorod($user)
    { 
        $users = [
		'Диана' => 'Питер',
		'Сережа' => 'Вологда',
		'Никита' => 'Екатеринбург',
		'Ариана' => 'Тюмень',
		'Юля' => 'Краснодар',
	];
    if (isset($users[$user])){
            return $users[$user];
        }
        else{
            return 'нет';
        }
    }
}
?>
