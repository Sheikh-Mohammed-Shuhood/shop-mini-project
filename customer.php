<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
echo "Great Work!";

//sql staments


$cname = $_POST['cname'];
$cphone = $_POST['cphone'];
$cadd = $_POST['cadd'];


$sql = "INSERT INTO `customer` (`cid`, `cname`, `cphone`, `cadd`) VALUES (NULL, '$cname', '$cphone', '$cadd');";
//print out the result
$result = mysqli_query($conn, $sql);



?>



