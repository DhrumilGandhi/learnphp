<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud');
$a = $_GET['id'];
$q = "SELECT * FROM crud_table where id = $a";

$b = mysqli_query($conn, $q);

while($c = mysqli_fetch_assoc($b)){    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST" action="update1.php">
        <input type="text" name = 'id' value = "<?php echo $c['id'] ?>" required/><br/>
        <input type="text" name = 'fname' value = "<?php echo $c['uname'] ?>" required/><br/>
        <input type="text" name = 'email' value = "<?php echo $c['email'] ?>" required/><br/>
        <input type="submit" value = "Update">
    </form>
    <?php
}

?>

</body>
</html>