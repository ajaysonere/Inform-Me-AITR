<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tableinfo{
            margin: 150px auto;
            font-size: large;
            padding-left: 600px;
        }
    </style>
</head>

<body>
    <div class="tableinfo">
    <?php
    require 'conn.php';

    if (isset($_GET['did'])) {
        mysqli_query($connection, "delete from databasetable where id = '{$_GET['did']}'") or die(mysqli_error($connection));
    }
    $query = mysqli_query($connection, "select * from databasetable") or die(mysqli_error($connection));
    echo "<table border = '1'>";
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
        echo "<td><a href='showcourse.php?did=$row[0]'> Delete </a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
</body>

</html>