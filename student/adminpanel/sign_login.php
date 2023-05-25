<?php
session_start();
header("Content-Type: text/html; charset-=utf-8");
require ("../cnuserdate/cnct.php");
require ("../main_functions.php");
error_reporting(E_ALL);
ini_set('display_errors',1);

if (isset($_POST['save'])){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = clean($_POST['userpassword']);

    if($DB ->query("INSERT INTO student_usertbl (id, username, password, full_name ) VALUES (?,?,?,?)",
        array(null, "$username", "$userpassword", "$useremail")))
    {
        echo "Информация сохранена";
    }else{
        echo "Ошибка!!!!";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Bootstrap demo</title>
</head>
<body>

<header style="height: 100vh" class="d-flex justify-content-center align-items-center h-200 w-100">
    <div>
        <div class="head w-100 d-flex justify-content-center">
            <nav class=" w-100 d-flex justify-content-center">
                <h1 class="d-flex">
                    Зарегистрироваться
                </h1>
            </nav>
        </div>
        <div class="card w-100 justify-content-center align-items-center d-flex "">
        <form method="post" class="w-100 justify-content-center form-control align-items-center flex-column r">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Имя</label>
                <input type="text" name="username"  id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Адрес электронной почти</label>
                <input type="text" name="useremail" id="useremail" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name="userpassword" id="userpassword" class="form-control" >
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="save" id="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
            </div>
        </form>
        <div id="result_form"></div>
    </div>
    </div>
</header>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
