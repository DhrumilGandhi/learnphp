<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
    <style>
        table th{
            border: 1px solid black;
        }  
        a{
            text-decoration : none;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan='2'>Opration</th>
        </tr>
        <?php

$conn = mysqli_connect('localhost', 'root', '', 'crud');

$q = "SELECT * FROM crud_table";

$a = mysqli_query($conn, $q);


while($c = mysqli_fetch_assoc($a)){
    ?>

        <tr>
            <th><?php echo $c['id']; ?></th>
            <th><?php echo $c['uname']; ?></th>
            <th><?php echo $c['email']; ?></th>
            <th><button><a href='update.php?id=<?php echo $c['id']; ?>'>Update</a></button></th>
            <th><button><a href='delete.php?id=<?php echo $c['id']; ?>'>delete</a></button></th>
        </tr>
        <?php
    }


?>
    </table>
</body>
</html>