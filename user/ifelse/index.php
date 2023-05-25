<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="choose.php" method="post">
    <select name="langs" id="">
        <option value="1">Eng</option>
        <option value="2">Ru</option>
        <option value="3">Uzb</option>
    </select>
    <button type="submit" name="save">Save</button>
</form>

<form action="age.php" method="post">
    <input type="number" name="age">
    <button type="submit" name="saveage">Save age</button>

</form>
</body>
</html>