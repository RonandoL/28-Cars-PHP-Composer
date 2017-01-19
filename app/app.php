<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      $porsche = new Car("Porsche 911", 56899, 120000);
      $ford = new Car("Ford F-150", 34444, 88989);
      $lexus = new Car("Lexus poodoo", 85000, 75857);
      $cars = array($porsche, $ford, $lexus);
      echo "string";
    });

    return $app;
?>
