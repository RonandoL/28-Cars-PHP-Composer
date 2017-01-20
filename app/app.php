<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Car Lot</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <h1>Search for Cars</h1>

              <form action='your-cars'>
                <div class='form-group'>
                  <label for='number'>Enter the amount you want to spend: </label>
                  <input type='number' name='number' id='number'>
                </div>
                <button type='submit' class='btn btn-lg btn-warning'>Submit</button>

              </form>
            </div>
          </body>
        </html>";
    });

    $app->get("/your-cars", function() {
      $porsche = new Car("Porsche 911", 56899, 120000, "https://c.slashgear.com/wp-content/uploads/2016/07/P1260789-01-200x200.jpeg");
      $ford = new Car("Ford F-150", 34444, 88989, "http://truckszilla.com/wp-content/uploads/2016-Ford-F-150-SVT-Raptor-review-200x200.jpg");
      $lexus = new Car("Lexus RX", 85000, 75857, "http://topcarsmodels.com/wp-content/uploads/2016-Lexus-RX-350-F-Sport_01-200x200.jpg");
      $accord = new Car("Honda Accord", 23500, 1500, "http://rs1226.pbsrc.com/albums/ee410/punjabiportal/honda-accord-2013-004.jpg~c200");
      $vwbug = new Car("VW Bug", 9750, 247000, "https://s-media-cache-ak0.pinimg.com/236x/41/40/47/414047a02d7f58b1afedc5e9449a8cfa.jpg");
      $cadi = new Car("Cadillac CTS", 78900, 25938, "http://rs898.pbsrc.com/albums/ac181/andynsp1/7781567080241003422IM102565x421_A56.jpg~c200");

      $all_cars = array($porsche, $ford, $lexus, $accord, $vwbug, $cadi);

      $price_point = $_GET["number"];
      $matching_cars = array();

      foreach ($all_cars as $car) {
        if ($car->worthBuying($price_point)) {
          array_push($matching_cars, $car);
        }
      }

      echo "<!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <title>Cars For You</title>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        </head>

        <body>
          <div class='container'>
            <h1>Car Dealership</h1>
            <h3>Below are the cars available in your price range</h3>
            <h4>Your search is for cars:</h4>
            <ul>
                <li>Priced below $$price_point </li>
            </ul>";

      $output = "";
      foreach ($matching_cars as $matched_car) {
          $output = $output . "
              <div class='row'>
                  <div class='col-md-3'>
                      <img src='" .  $matched_car->getimage() ."'>
                  </div>
                  <div class='col-md-3'><h3>" . $matched_car->getMakeModel() . "</h3>
                      <p>" . $matched_car->getMiles() . " miles</p>
                      <p>$" . $matched_car->getPrice() . "</p>
                  </div>
              </div>";
      }

      return $output . "</div> <!-- container -->
          </body>
        </html>";

    });

    return $app;
?>
