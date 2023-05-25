<?php  header("Content-Type: text/html; charset=utf-8");
require ('development_mode_control.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My array</title>
  <style>
    body{
      margin: 0;
      padding: 0;
    }
    .container{
      margin: auto;
      width: 600px;
      background:  #2ba1ff;
    }
    h1 {
      text-align: center;
    }
    h2{
      margin: 15px;
      padding: 10px 15px;
    }
    p{
      padding: 15px ;
      margin: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Задание</h1>
    <div class="nav">
        <?php
        $result = $DB->query("SELECT * FROM zero");
        foreach ($result as $item): ?>
      <h2><?php echo $item['item'];?></h2>
            <p><?php echo $item['title'];?> </p>
        <?php endforeach; ?>
    </div>
  </div>
</body>
</html>