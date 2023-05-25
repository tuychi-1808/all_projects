<?php

require_once 'connect.php';

if (isset($_POST['save']))
{
    $protoc_number = $_POST['protoc_number'];
    $protoc_date = $_POST['protoc_date'];
    $responsible = $_POST['responsible'];
    $accordance = $_POST['accordance'];

    $query = mysqli_query($conn,"SELECT * FROM `PROTOCOL_TABLE` WHERE protoc_number = '$protoc_number'");
    if (mysqli_num_rows($query)>0)
    {
        $message =  'Номер протокола уже существует в базе';
    }
    else{
        $sql = "insert into `PROTOCOL_TABLE`(protoc_number, protoc_date, responsible, accordance) values ('$protoc_number', '$protoc_date', '$responsible', '$accordance')";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
            header('location:protocol.php');
        }else
        {
            die(mysqli_error($conn));
        }
        mysqli_close($conn);
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
                    Добавить новый протокол
                </h1>
            </nav>
        </div>
        <div class="card w-100 justify-content-center align-items-center d-flex "">
        <form method="post" class="w-100 justify-content-center form-control align-items-center flex-column r">
            <?php
            if (isset($message))
            {
                echo '<label class="text-danger">' . $message . '</label>';
            }
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Номер протокола</label>
                <input type="text" name="protoc_number"  id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Дата выдачи</label>
                <input type="date" name="protoc_date" id="login" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ответственный</label>
                <input type="text" name="responsible" id="userpassword" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Соответствие</label>
                <select class="form-select" name="accordance" aria-label="Default select example">
                    <option selected>--Выбрать--</option>
                    <option value="yes">Да</option>
                    <option value="no">Нет</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="save" id="submit" class="btn btn-success w-100">Добавить данные</button>
                <a href="protocol.php" class="btn btn-primary w-100">Все протоколы</a>
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
