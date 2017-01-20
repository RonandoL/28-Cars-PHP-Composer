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

      echo "<!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <title>Ping Pong</title>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        </head>

        <body>
          <div class='container'>
            <h1>Car Dealership</h1>";

      $output = "";
      foreach ($cars as $car) {
          $output = $output . "
              <div class='row'>
                  <div class='col-md-3'>
                      <img src='" .  $car->getimage() ."'>
                  </div>
                  <div class='col-md-3'><h3>" . $car->getMakeModel() . "</h3>
                      <p>" . $car->getMiles() . " miles</p>
                      <p>$" . $car->getPrice() . "</p>
                  </div>

              </div>";
      }

      return $output . "</div> <!-- container -->
          </body>
        </html>";

    });

    return $app;
?>
