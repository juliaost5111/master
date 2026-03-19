<?php

namespace App\Http\Controllers;

abstract class Controller
{
    $url = 'https://example.Com';
    $params = ['id' => 123, 'type' => 'product'];
    $worker = [
        'name' => 'Иван Иванов',
        'age' => 30,
        'salary' => 50000
       ];
       return view('worker', ['worker' => $worker]);

       $items = ['яблоко', 'банан', 'вишня'];
       return view('count', ['items' => $items]);

       $city = null; 
       return view('city', ['city' => $city]);

       $location = [
        'country' => null,
        'city' => 'Санкт-Петербург'
       ];
       return view('location', ['location' => $location]);

       $year = null;
       $month = 8;
       $day = null;
      return view('date', [
 'year' => $year,
 'month' => $month,
 'day' => $day
 ]);
 }
 public function showUserAge()
{
 $age = 16; 
 return view('age', ['age' => $age]);
}

public function showSquares()
{
 $array = [1, 2, 3, 4, 5];
 $squares = array_map(function($x) {return $x ** 2;}, $array);
 return view('squares', ['squares' => $squares]);
}
public function showRoots()
{
 $array = [1, 4, 9, 16, 25];
 $roots = array_map('sqrt', $array);
 return view('roots', ['roots' => $roots]);
}
public function showStringArray()
{
 $stringArray = ['name' => 'Alice', 'city' => 'Moscow', 'job' => 'Developer'];
 return view('string-array', ['array' => $stringArray]);
}
       ?>

