<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud');
// connection 
$fname = $_POST['fname'];
$femail = $_POST['email'];

$q = "INSERT INTO crud_table(uname, email) values('$fname' , '$femail')";
$a = mysqli_query($conn , $q);
// run query and check it
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