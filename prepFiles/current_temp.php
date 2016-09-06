<?php
    $input_temp = $_GET["input_temp"];
    $message = checkTemp($input_temp);

    function checkTemp($input_temp)
    {
      if ($input_temp < 60) {
        return "It's cold out!";
      }
      elseif ($input_temp > 80) {
        return "It's devil hot!";
      }
      else {
        return "It's lovely out.";
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>
    <div class="container">
<h3><?php echo $message?></h3>
    </div>
</body>
</html>
