<?php

$conn = new mysqli('localhost', 'root','','protocol');

if (!$conn){
    die(mysqli_error($conn));
}

?>