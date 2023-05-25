<?php header("Content-Type: text/html; charset=utf-8");

require ('development_user_mode.php');

?>

<!DCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/fonts.css" />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Street88</title>
  </head>
  <body>
  <!-- Staet menu-->
   <?php include ('menu.php');?>
  <!-- End menu-->

  <!-- Staet header-->
    <header>
        <?php include ('header.php');?>
    </header>
  <!-- End header-->
    <main>
      <section class="menu">
        <div class="container">
            <!-- Start ul_main-->
         <?php include ('ul_main.php');?>
            <!-- End ul_main-->

            <!-- Start burger-->
          <?php include ('burger.php');?>
            <!-- End burger-->

        </div>
      </section>
        <!-- Start aboutburger-->
    <?php include ('aboutburger.php');?>
        <!-- End aboutburger-->

        <!-- Start our_maps-->
   <?php include ('our_maps.php');?>
    </main>
  <!-- End our_maps-->

  <!-- Start footer-->
   <?php include ('footer.php');?>
  <!-- End footer-->
  </body>
</html>
