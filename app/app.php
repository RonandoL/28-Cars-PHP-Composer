<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      $porsche = new Car("Porsche 911", 56899, 120000, "https://c.slashgear.com/wp-content/uploads/2016/07/P1260789-01-200x200.jpeg");
      $ford = new Car("Ford F-150", 34444, 88989, "http://truckszilla.com/wp-content/uploads/2016-Ford-F-150-SVT-Raptor-review-200x200.jpg");
      $lexus = new Car("Lexus RX", 85000, 75857, "http://topcarsmodels.com/wp-content/uploads/2016-Lexus-RX-350-F-Sport_01-200x200.jpg");
      $cars = array($porsche, $ford, $lexus);

      $output = "";
      foreach ($cars as $car) {
          $output = $output . $car->getMakeModel();
      }
      return $output;

    });

    return $app;
?>
