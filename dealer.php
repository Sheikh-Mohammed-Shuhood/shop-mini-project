<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
echo "Great Work!";

//sql staments


$dname = $_POST['dname'];
$dphone = $_POST['dphone'];
$dadd = $_POST['dadd'];


$sql = "INSERT INTO `dealer` (`did`, `dname`, `dphone`, `dadd`) VALUES (NULL, '$dname', '$dphone', '$dadd');";
//print out the result
$result = mysqli_query($conn, $sql);



?>



