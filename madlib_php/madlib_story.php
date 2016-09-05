<?php
    $person1 = $_GET["person1"];
    $person2 = $_GET["person2"];
    $animal = $_GET["animal"];
    $exclamtion = $_GET["exclamation"];
    $verb = $_GET["verb"];
    $noun = $_GET["noun"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/styles.css" type="text/css">
   <script src="js/jquery-3.1.0.js"></script>
   <script src="js/scripts.js"></script>
   <title>Mad Lib</title>
 </head>
 <body>
      <h1>A fantastical adventure</h1>
      <p>One day, <?php echo $animal ?> and <?php echo $person2 ?> were walking through the woods, when suddendly a giant <?php echo $animal ?> appeared. </p>
      <p>"<?php echo $eclamation ?>", <?php echo $person1 ?> cried.</p>
      <p>The two of them <?php echo $verb ?> as quickly as possible, and they were safe, <?php echo $person1 ?> and <?php echo $person2 ?> gave each other a giant <?php echo $noun ?>.</p>
 </body>
 </html>
