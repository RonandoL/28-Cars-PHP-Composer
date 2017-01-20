<?php
    class Car
    {
      private $make_model;
      private $price;
      private $miles;

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

      // SET GET MAKE MODEL
      function setMakeModel($new_make_model)
      {
          $this->make_model = $new_make_model;
      }
      function getMakeModel()
      {
          return $this->make_model;
      }

      // SET GET PRICE
      function setPrice($new_price)
      {
          $this->price = $new_price;
      }
      function getPrice()
      {
          return $this->price;
      }

      // SET GET MILES
      function setMiles($new_miles)
      {
          $this->miles = $new_miles;
      }
      function getMiles()
      {
          return $this->miles;
      }

    }



?>
