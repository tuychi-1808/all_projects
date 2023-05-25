<?php     header("Content-Type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION["session_username"]))
{
    header("location:login.php");
}
require ('../development_mode_control.php') ;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>


<body class="fixed-navbar">

<?php
    $thirt_id = $_GET['id'];

    if (isset($_POST['editthirt']))
    {
       $title = $_POST['title'];
       $price = $_POST['price'];
       $them = $_POST['them'];
       $width = $_POST['width'];
       $value = $_POST['value'];
       $thirtrow_id = $_POST['thirtrow_id'];

        $DB->query("UPDATE thirttask SET title = ?, price = ?,  them = ?, width = ?, value = ? WHERE id = ?",
            array("$title","$price","$them","$width","$value","$thirtrow_id"));
        echo "Изменено" ;

        header('location:index.php');
    }


$result = $DB->query("SELECT * FROM thirttask WHERE id=?",array("$thirt_id"));
foreach ($result as $row) :?>


<form action="#" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Меню</label>
        <input type="text" name="price" value="<?php echo $row['price'];?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Показатель</label>
        <input type="text" name="them" value="<?php echo $row['them'];?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Проценты</label>
        <input type="text" name="width" value="<?php echo $row['width'];?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Значение</label>
        <input type="text" name="value" value="<?php echo $row['value'];?>" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="hidden" name="thirtrow_id" value="<?php echo $row["id"];?>">
    <button type="submit" name="editthirt" class="btn btn-primary" >Отправить</button>
</form>
<!--End edit firsttask-->
<?php endforeach;?>





<script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

</html>