<?php header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set('Europe/Moscow');
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
                    <span class="brand-mini"></span>
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
                            <img src="./assets/img/admin-avatar.png" /><span><i><?php echo $_SESSION['session_id'];?></i></span></a>
                            <span><i><?php echo date("Y-m-d") ;?></i></span>
                            <span><i><?php echo date("H:i:s") ; ;?></i></span>
                            <span><i><?php echo date("l") ;?></i></span>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <a class="dropdown-item" href="user_logaut.php"><i class="fa fa-power-off"></i>Logout</a>
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
                        <div class="font-strong"> <span></span><?php echo $_SESSION['session_username'];?></i></a></div><small> <span></span><?php echo $_SESSION['session_id'];?></i></a></small></div>
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
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Добавить информации</div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Price</th>
                                            <th>Title</th>
                                            <th>Texttitle</th>
                                            <th>Action<a href="insert_burger.php" class="btn btn-outline btn btn-success btn-sm ml-5">Добавить</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $result = $DB->query("SELECT * FROM burger");
                                        foreach ($result as $row):
                                    ?>
                                        <tr>
                                            <th><?php echo $row['id']?></th>
                                            <th><img src="<?php echo $row['image'];?>" width="50px" height="50px"></th>
                                            <th><?php echo $row['burger_insert'];?></th>
                                            <th><?php echo $row['price'];?></th>
                                            <th><?php echo $row['title'];?></th>
                                            <th>
                                                <div class="" style="width: 30rem;">
                                                    <?php echo $row['texttitle'];?>
                                                </div>

                                            </th>
                                            <th>
                                                <a href="statusupdater.php?status=1&id=<?php echo $row['id'];?>&dbname=burger&" class="btm btn-outline btn btn-info btn-sm mb-2">Опубликовать</a>
                                                <a href="statusupdater.php?status=0&id=<?php echo $row['id'];?>" class="btn btn-outline btn btn-danger btn-sm mb-2">Не опубликовать</a>
                                                <a href="burgeredit.php?status=0&id=<?php echo $row['id'];?>" class="btn btn-outline btn btn-danger btn-sm mb-2">Редактировать</a>
                                                <a href="delete.php?id=<?php echo $row['id'];?>&dbname=burger&url=index.php&burrow=id" class="btn btn-outline btn btn-secondary btn-sm mb-2">Стереть</a>
                                            </th>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13"><i><?php echo date("Y-m-d") ;?></i> <i><?php echo date("H:i:s") ; ;?></i> <i><?php echo date("l") ;?></i>© <b><AdminCAST/b> - All rights reserved.</div>
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