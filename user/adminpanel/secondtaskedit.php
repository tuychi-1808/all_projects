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
$second_id = $_GET['id'];

if (isset($_POST['editsecond']))
{
    $title = $_POST['title'];
    $tags = $_POST['tags'];
    $secondrow_id = $_POST['secondrow_id'];

    $DB->query("UPDATE secondtask SET title = ?, tags = ? WHERE id = ?", array("$title","$tags","$secondrow_id"));
    echo "Изменено" ;

    header('location:index.php');
}


$result = $DB->query("SELECT * FROM secondtask WHERE id=?",array("$second_id"));
foreach ($result as $row) :?>
    <form action="#" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Заголовок</label>
            <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Текст</label>
            <input type="text" name="tags" value="<?php echo $row['tags'];?>" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="hidden" name="secondrow_id" value="<?php echo $row["id"];?>">
        <button type="submit" name="editsecond" class="btn btn-primary" >Отправить</button>
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
