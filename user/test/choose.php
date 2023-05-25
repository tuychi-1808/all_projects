<?php
$date = 1.1;
$type = $date;

var_dump($type);
if ($type != is_int($type))
{
    echo "Error";
}else{
    echo "Fine!!!";
}