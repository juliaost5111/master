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
       ?>

