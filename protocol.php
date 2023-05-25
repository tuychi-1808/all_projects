
<?php
require_once 'connect.php';

function accordanceswitch($item)
{
    if ($item == "yes"){
        $item = "да";
    }
    else
        $item = "нет";
    return $item;
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

<header style="height: 100vh" class="d-flex justify-content-center align-items-center">
    <div style="width: 500px">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер протокола</th>
                <th scope="col">Дата выдачи</th>
                <th scope="col">Ответственный</th>
                <th scope="col">Соответствие</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php

                    $sql = "Select * from `PROTOCOL_TABLE`";
                    $result = mysqli_query($conn, $sql);
                    if ($result){
                    while ($row=mysqli_fetch_assoc($result)){
                        $protoc_number = $row['protoc_number'];
                        $protoc_date = $row['protoc_date'];
                        $responsible = $row['responsible'];
                        $accordance = $row['accordance'];
                        echo '    <br> 
                                  <th scope="row">1</th>
                                  <td>'.$protoc_number.'</td>
                                  <td>'.$protoc_date.'</td>
                                  <td>'.$responsible.'</td>
                                  <td>'. accordanceswitch($accordance) .'</td>
            </tr> ';
                    }
                }

                ?>

            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary w-100">Добавить протокол</a>
    </div>
    </div>

</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

