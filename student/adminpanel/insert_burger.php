<?php header("Content-Type: text/html; charset=utf-8");
session_start();
if (!isset( $_SESSION['session_username']))
{
    header("location:enter_login.php");
}
require ('../development_user_mode.php');


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
<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="page-brand">
            <a class="link" href="index.html">
                    <span class="brand">Admin
                        <span class="brand-tip">CAST</span>
                    </span>
                <span class="brand-mini">AC</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                </li>
                <li>
                    <form class="navbar-search" action="javascript:;">
                        <div class="rel">
                            <span class="search-icon"><i class="ti-search"></i></span>
                            <input class="form-control" placeholder="Search here...">
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <img src="./assets/img/admin-avatar.png" />
                        <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                        <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                        <li class="dropdown-divider"></li>
                        <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                    </ul>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <div class="admin-block d-flex">
                <div>
                    <img src="./assets/img/admin-avatar.png" width="45px" />
                </div>
                <div class="admin-info">
                    <div class="font-strong">James Brown</div><small>Administrator</small></div>
            </div>
            <ul class="side-menu metismenu">
                <li>
                    <a class="active" href="../index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Главная страница</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END SIDEBAR-->
    <?php

    if (isset($_POST['saveburger']))
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $title= $_POST['title'];
        $texttitle = $_POST['texttitle'];

   if(!empty($_FILES['image']['tmp_name'])) {
       $file = $_FILES['image']['tmp_name'];
       $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
       $uniquenumber = rand(1111, 9999);
       $uniquestring = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
       $somestring = uniqid();
       $image_namefinal = md5($somestring . $uniquestring . $uniquenumber);
       $image_name = $image_namefinal . ($_FILES['image']['name']);
       move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
       $location = "images/" . $_FILES['image']['name'];


   }else {
       echo $location= '';
   }

   if($DB ->query("INSERT INTO burger (id, image, burger_insert, price, title, texttitle ) VALUES (?,?,?,?,?,?)",
        array(null, "$location", "$name", "$price", "$title", "$texttitle")))
   {
       echo "Информация сохранена";

       header('location:index.php');
   }
    }
    ?>
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-lg-10">
                    <div class="ibox">
                        <form method="post" enctype="multipart/form-data" class="form-control">
                            <div class="form-group">
                                <label >Фото товара</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label >Название товараа</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Цена товара</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Состав товара</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Описание к товару</label>
                                <textarea class="form-control" name="texttitle" rows="8"></textarea>
                            </div>
                                <a href="index.php" class="btn btn-danger align-content-center">Назад</a>
                                <button type="submit" name="saveburger" class="btn btn-primary align-content-center">Отправить</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
            <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
</div>
<!-- BEGIN THEME CONFIG PANEL-->

<!-- END THEME CONFIG PANEL-->
<!-- BEGIN PAGA BACKDROPS-->

<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
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