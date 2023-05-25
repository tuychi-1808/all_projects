<?php
if (isset($_POST['save']))
{
    $lang = $_POST['langs'] ;
    if ($lang == 1) {
        include 'langs/en.php' ;
    }
    elseif ($lang == 2) {
        include 'langs/ru.php' ;
    }
    else {
        include 'langs/uz.php' ;
    }
}
else {
    echo "Error" ;
}
?>