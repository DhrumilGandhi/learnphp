<?php 
$conn = mysqli_connect('localhost', 'root', '', 'crud');
$id = $_GET['id'];
// delete query
$q = "DELETE FROM crud_table WHERE id = $id";
$a = mysqli_query($conn, $q);

if($a){
    ?>
        <script>
        alert('Data Deleted..!!');
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