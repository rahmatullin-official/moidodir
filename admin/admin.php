<?php
require_once '../functions/connect.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Document</title>
</head>
<body>
<table class="table">
    <tbody>

    <tr>
        <th>id</th>
        <th>id_pupil</th>
        <th>data_time</th>
        <th>percent</th>
        <th>wash_time</th>
    </tr>
    <?php
    $result = mysqli_query($connect, 'SELECT * FROM `main`');

    while ($row = mysqli_fetch_array($result)) { // выводим данные
        echo "<tr>\n<td>" . $row["id"] . "</td>" . "\n" . "<td>" . "" . $row["id_pupil"] . "
         </td>" . "\n" . "<td>" . "" . $row["data_time"] . "</td>" . "\n" . "<td>" . "" . $row
            ["percent"] . "</td>" . "\n" . "<td>" . "" . $row["wash_time"] . "</td>" . "\n" . "</tr>" . "\n";

    }

    ?>
    </tbody>
</table>
</body>
</html>
