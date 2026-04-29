<?php

use App\Flight;

$flights = App\Flight::all();

foreach ($flights as $flight) {
  echo $flight->name;
}
?>
