<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud');
$fname = $_POST['fname'];
$femail = $_POST['email'];

$q = "INSERT INTO crud_table(uname, email) values('$fname' , '$femail')";
$a = mysqli_query($conn , $q);
if ($a){
    ?>
    <script>
        alert("Data inserted..!!")
        window.location.href="home.html"
    </script>
    <?php
}
else{
    echo "kai locho aayo bhai";
}
?>