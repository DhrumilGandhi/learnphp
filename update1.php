<?php
$id = $_POST['id'];
$fname = $_POST['fname'];
$femail = $_POST['email'];
$conn = mysqli_connect('localhost', 'root', '', 'crud');


// update query
    $update = "UPDATE crud_table SET id=$id, uname='$fname',email='$femail' WHERE id = 6";
    $ab = mysqli_query($conn, $update);
    if($ab){
        ?>
        <script>
        alert('Data Updated..!!');
        window.location.href="home.html";
        </script>
        <?php
    }
    else{
        ?>
        <script>
        alert('Something is wrong..!!');
        </script>
        <?php
    }

?>