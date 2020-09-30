<!DOCTYPE html>
<html lang="ru">
<?php
include 'phpscripts/script.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ДМ 5</title>
</head>

<body>
    <form method="post">
        <h1>Нахождение матрицы достижимости</h1>
        <h3>Примеры</h3>
        <p>Первый пример:<br>
        0 0 0 1<br>
        0 0 1 1<br>
        0 0 0 1<br>
        0 1 0 0</p>
        <p>Второй пример:<br>
            0 0 0 1<br>
            1 0 0 0<br>
            0 0 0 1<br>
            0 0 1 0</p>
        <p><input  type="text" class="" name="00" />
            <input  type="text" class="" name="01" />
            <input  type="text" class="" name="02" />
            <input  type="text" class="" name="03" /></p>

        <p><input  type="text" class="" name="10" />
            <input  type="text" class="" name="11" />
            <input  type="text" class="" name="12" />
            <input  type="text" class="" name="13" /></p>

        <p><input  type="text" class="" name="20" />
            <input  type="text" class="" name="21" />
            <input  type="text" class="" name="22" />
            <input  type="text" class="" name="23" /></p>

        <p><input  type="text" class="" name="30" />
            <input type="text" class="" name="31" />
            <input  type="text" class="" name="32" />
            <input  type="text" class="" name="33" /></p><br />

        <input type="submit" value="Проверка" onClick="getDataUser()" />
    </form>

    <?php
    $arr;
    $array;
    
    if ($_POST['00'] != "") {
        $arr = getdata();
        validate($arr);
        $arr = minl($arr);
        printl($arr);
        return;
    }

    ?>



</body>

</html>