<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
echo "Great Work!";

//sql staments
if (isset($_POST['submit'])) {

    $txtName = $_POST['textname'];
    $txtEmail = $_POST['textemail'];
    $txtPhone = $_POST['textphono'];
    $txtaddr = $_POST['textaddr'];
    $txtpass = $_POST['textpass'];

    $sql = "INSERT INTO `employee` (`eid`, `ename`, `ephone`, `eemail`, `eadd`, `epass`) VALUES (NULL, '$txtName', '$txtPhone', '$txtEmail', '$txtaddr', '$txtpass')";
    //print out the result
    $result = mysqli_query($conn, $sql);
    echo "success";
}


?>