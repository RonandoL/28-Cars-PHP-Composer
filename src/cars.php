<?php
    class Car
    {
      private $make_model;
      private $price;
      private $miles;
      private $image;

      function __construct($car_make_model, $car_price, $car_miles, $car_image)
      {
          $this->make_model = $car_make_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
          $this->image = $car_image;
      }

      function worthBuying($max_price_inputted)
      {
          return $this->price < ($max_price_inputted);
      }

      // SETTERS-GETTERS MAKE MODEL
      function setMakeModel($new_make_model)
      {
          $this->make_model = $new_make_model;
      }
      function getMakeModel()
      {
          return $this->make_model;
      }

      // SETTERS-GETTERS PRICE
      function setPrice($new_price)
      {
          $this->price = $new_price;
      }
      function getPrice()
      {
          return $this->price;
      }

      // SETTERS-GETTERS MILES
      function setMiles($new_miles)
      {
          $this->miles = $new_miles;
      }
      function getMiles()
      {
          return $this->miles;
      }

      // SETTERS-GETTERS IMAGE
      function setImage($new_image)
      {
          $this->image = $new_image;
      }
      function getImage()
      {
          return $this->image;
      }

    }



?>
