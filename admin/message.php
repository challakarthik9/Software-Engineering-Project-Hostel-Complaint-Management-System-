<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">


  </head>
  <body>

  <?php require 'nav.php'; ?>
  <div class="animated fadeIn">


  <div class="cover main">
    <h1>Messages</h1>
  </div>

    <div class="div">
        <div class="col-lg-12 ">
          <?php $result = mysql_query("SELECT * FROM `cmp_log`");
            $num_rows = mysql_num_rows($result);
            ?>
              <div class='admin-data'>
                Messages
                <span class='button view' href=''><?php echo "$num_rows";?></a>
              </div>
              <br><br><br><br>
              <br><br>

              <br>
              <h2 class="text-center"><?php echo $message; ?></h2>
              <br><br>

          <?php

            while($data=mysql_fetch_array($result)) {
            echo"<div class='admin-data'>";
            echo $data['name'];
            $empty=$data['name'];
            echo "<a class='button view' href='message-view.php?id=$data[id]'>View</a>";
            echo "</div>";

          }
            if (empty($empty)==true) {
              $message = "You Have no Message !!";
            }else{
              $message = "You Have got some Message";

            }


          ?>


          <br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>

  </div>

      <footer>
            <br><br>&copy 2019 <?php echo $web_name; ?>
      </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>
