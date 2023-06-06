<?php header("Content-Type: text/html; charset=utf-8");
session_start();
if (!isset( $_SESSION['session_username']))
{
    header("location:enter_login.php");
}
require ('../development_user_mode.php');


$id = $_GET['id'];
$url = $_GET['url'];
$dbname = $_GET['dbname'];
$rowVar = $_GET['burrow'];

$DB->query("DELETE FROM {$dbname} WHERE {$rowVar} = ?", array("$id"));

header('location:' . $url);

