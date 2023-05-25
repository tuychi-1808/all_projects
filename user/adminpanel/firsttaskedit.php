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
<!--Start edit firsttask-->
<?php
$first_id = $_GET['id'];

if (isset($_POST['editfirst']))
{
    $item = $_POST['item'];
    $title = $_POST['title'];
    $firstrow_id = $_POST['firstrow_id'];

    $DB->query("UPDATE firsttask SET item = ?, title = ? WHERE id = ?", array("$item","$title","$firstrow_id"));
    echo "Изменено" ;

    header('location:index.php');
}


$result = $DB->query("SELECT * FROM firsttask WHERE id=?",array("$first_id"));
foreach ($result as $row) :?>
<form action="#" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Заголовок</label>
        <input type="text" name="item" value="<?php echo $row['item'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Текст</label>
        <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="hidden" name="firstrow_id" value="<?php echo $row["id"];?>">
    <button type="submit" name="editfirst" class="btn btn-primary" >Отправить</button>
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