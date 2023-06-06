<?php

function userLevel()
{
    global $conn;
    $u = $_SESSION["session_username"];
    $userLevel = $conn->prepare('SELECT user_level FROM usertable = :u');
    $userLevel->execute(array('u'=>$u));
    $adminresult = $userLevel -> fetchAll();
    foreach ($adminresult as $row):
        $userLevel = $row['user_level'];
    endforeach;
    return$userLevel;

}

function clean($value = "")
{
    $value = trim($value);
    $value = stripcslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

function generatePassword($length = 10){
    $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
        '0123456789!?';

    $str = '';
    $max = strlen($chars) - 1;

    for ($i=0; $i < $length; $i++)
        $str .= $chars[mt_rand(0, $max)];

    return $str;
}


function switcherOfOn ($visibility) {
    if ($visibility==1) {
        $visibility = "Включен" ;
    }
    else
        $visibility = "Выключен" ;
    return $visibility ;
}