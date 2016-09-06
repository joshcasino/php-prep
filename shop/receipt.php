<?php
    $first_name = $_GET["first_name"];
    $last_name = $_GET["last_name"];
    $street = $_GET["street"];
    $city = $_GET["city"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/scripts.js"></script>
  <title>Shipping Information</title>
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h3>Thank you for your purchase! </h3>
        </div>
        <div class="col-xs-6">
          <h3>Dear <?php echo $first_name ?>,</h3>
          <p>Thank you for your recent purchase. This is your confirmation receipt. Below you will find your shipping information.</p>
          <p><?php echo $first_name ?> <?php echo $last_name ?></p>
          <p><?php echo $street ?></p>
          <p><?php echo $city ?> ,<?php echo $state ?> <?php echo $zip ?></p>
        </div>
      </div>
    </div>
  </body>
</html>
