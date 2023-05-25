<?php header("Content-Type: text/html; charset=utf-8");
session_start();
if (!isset( $_SESSION['session_username']))
{
    header("location:enter_login.php");
}
require ('../development_user_mode.php');

?>


<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>ADMIN</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

</head>
<body>

<?php
    $id = $_GET['id'];

if (isset($_POST['editburger']))
{
    $insert = $_POST['insert'];
    $price = $_POST['price'];
    $title = $_POST['title'];
    $texttitle = $_POST['texttitle'];
    $burger_id = $_POST['burger_id'];

    $DB->query("UPDATE burger SET burger_insert = ?, price= ?,title= ?, texttitle = ?  WHERE id = ?",
        array("$insert","$price","$title","$texttitle", "$burger_id"));
    echo "Изменено!!!";

    header('location:index.php');
}

$result = $DB->query("SELECT * FROM burger WHERE id = ?", array("$id"));
foreach ($result as $row):
?>
<form action="#" method="post">

    <div class="card-body">
        <div class="row form-group pb-3">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="col-form-label" for="formGroupExampleInput">Insert</label>
                    <input type="text" name="insert" value="<?php echo $row['burger_insert']; ?>" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="col-form-label" for="formGroupExampleInput">Price</label>
                    <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="col-form-label" for="formGroupExampleInput">Title</label>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="col-form-label" for="formGroupExampleInput">Texttitle</label>
                    <input type="text" name="texttitle" value="<?php echo $row['texttitle']; ?>" class="form-control" id="formGroupExampleInput">
                </div>
            </div>

        </div>
    </div>
    <input type="hidden" name="burger_id" value="<?php echo $row['id'];?>">
    <footer class="card-footer text-end">
        <button class="btn btn-primary" type="submit"  name="editburger">Добавить</button>
    </footer>
</form>
<?php endforeach;?>

<!-- Vendor -->
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/nanoscroller/nanoscroller.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

</body>
</html>


