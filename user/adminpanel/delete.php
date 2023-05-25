<?php     header("Content-Type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION["session_username"]))
{
    header("location:login.php");
}
require ('../development_mode_control.php') ;

//Start delete firsttask

$first_del = $_GET['id'];

$DB->query("DELETE FROM firsttask  WHERE id = ?", array("$first_del"));

header('location:index.php');

//End delete firsttask


//Start delete secondtask

$second_del = $_GET['id'];

$DB->query("DELETE FROM secondtask  WHERE id = ?", array("$second_del"));

header('location:index.php');

//End delete secondtask


//Start delete thirttask

$thirt_del = $_GET['id'];

$DB->query("DELETE FROM thirttask  WHERE id = ?", array("$thirt_del"));

header('location:index.php');

//End delete thirttask




?>


