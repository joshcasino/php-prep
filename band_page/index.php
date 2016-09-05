<?php
    $lead_singer = "Dave Hause";
    $lead_guitar = "Dave Walsh";
    $bass_player = "Chris Gonzalez";
    $drummer = "Mike Sneeriger";
    $main_photo = "img/loved_ones.jpg";
    $style = "Punk"
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
    <div class="container">
      <div class="jumbotron">
        <img src="<?php echo($main_photo);?> />"
        <!-- <img src="img/loved_ones.jpg" id="lovedImg" alt="The loved ones" /> -->
        <h1>The Loved Ones</h1>
        <h4>Tarantulas attack!</h4>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <h3>Band Members: </h3>
          <ul>
            <li><?php echo $lead_guitar?></li>
            <li><?php echo $lead_guitar?></li>
            <li><?php echo $bass_player?></li>
            <li><?php echo $drummer?></li>
          </ul>
        </div>
        <div class="col-xs-6">
          <h3>BIO: </h3>
          <p>
            Nullam est sapien, vehicula nec consectetur sed, pulvinar sed elit. Nulla commodo tempus tellus eu tempor. Integer aliquam a velit a blandit. Sed interdum ut ligula sed eleifend. In sed condimentum quam. Curabitur porta tellus non ipsum finibus tempor. Sed imperdiet viverra nisi, ac volutpat lorem consequat auctor. In lorem orci, vehicula nec porttitor ac, mattis nec elit.

            Etiam sit amet nisl varius, finibus dolor id, cursus est. <strong><?php echo $style?></strong> Maecenas varius porttitor velit vehicula finibus. Aliquam vel sapien gravida, porta mauris vel, pharetra leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis fringilla pulvinar hendrerit. Aliquam sed efficitur massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eget mauris consequat, volutpat velit eget, dignissim justo. Nam justo odio, lacinia id magna ut, maximus congue tellus. Praesent placerat in sapien porta porta. Duis nec libero commodo, congue odio ac, fringilla augue. Nullam sollicitudin felis et nulla elementum convallis. Duis ac rhoncus lacus. Duis ultricies magna vitae dignissim dignissim.

            Aliquam consequat vulputate dolor et cursus. Pellentesque sit amet sollicitudin dolor. Nam in lacinia ante, sit amet ultricies ex. Cras et metus et ipsum ornare vestibulum. Aenean dui libero, faucibus nec erat sit amet, pharetra facilisis lorem. Ut eu sodales lectus, sed imperdiet dolor. Maecenas in elementum ipsum, eu viverra dui. Suspendisse maximus vitae velit non lacinia. Sed placerat nisi erat, eget pretium sapien pretium sed. Maecenas ut arcu eleifend nisi euismod aliquet. Ut et erat id leo sagittis elementum. Curabitur eget porta mi, vitae mollis nibh. Donec a nunc ipsum. Nunc ultricies fringilla purus, vehicula varius quam.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
