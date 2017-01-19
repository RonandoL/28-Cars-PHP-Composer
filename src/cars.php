<?php
    class Car
    {   // Properties
      public $make_model;
      public $price;
      public $miles;

      function __construct($car_make_model, $car_price, $car_miles)
      {
          $this->make_model = $car_make_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
      }

      function worthBuying($max_price_inputted)
      {
          return $this->price < ($max_price_inputted + 100);
      }
    }

    // Instantiating Four Car Objects
    $porsche = new Car("Porsche 911", 56899, 120000);
    $ford = new Car("Ford F-150", 34444, 88989);
    $lexus = new Car("Lexus poodoo", 85000, 75857);

    $cars = array($porsche, $ford, $lexus);
    // end object

    $matching_cars = array();

    foreach ($cars as $car) {
      if ($car->worthBuying($_GET["price"])) {
        array_push($matching_cars, $car);
      }
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Cars</h1>
      <ul>
        <?php
            foreach ($matching_cars as $car) {
              echo "<li>$" . $car->price . " - " . $car->make_model . " " . $car->miles . " miles </li>";
            }
        ?>
      </ul>
    </div>

  </body>
</html>
