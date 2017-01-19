<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/pingpong", function() {
        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Ping Pong</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <h1>Ping Pong Test</h1>

              <form action='pingpong.php'>
                <div class='form-group'>
                  <label for='number'>Enter a number to count to</label>
                  <input type='number' name='number' id='number'>
                </div>
                <button type='submit' class='btn btn-lg btn-warning'>Submit</button>

              </form>
            </div>
          </body>
        </html>";
    });

    return $app;
?>
