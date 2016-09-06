<?php
  $friend_name = $_GET["recipient"]; //The code $_GET["recipient"] will give us the value of the <input> field with the name attribute set to "recipient"
  $my_name = $_GET["sender"]; //similar to the above code
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/scripts.js"></script>
  <title></title>
</head>
  <body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $friend_name; ?>,</p>
    <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
    <p><?php echo $friend_name; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
    <p>Looking forward to seeing you soon. I'll bring back a souvenir. </p>
    <p>Cheers,</p>
    <p><?php echo $my_name?></p>
  </body>
</html>
