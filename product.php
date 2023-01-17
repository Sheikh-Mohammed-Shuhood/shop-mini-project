<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
echo "Great Work!";

//sql staments


$prodname = $_POST['prodname'];
$prodcost = $_POST['prodcost'];
$instock = $_POST['instock'];


$sql = "INSERT INTO `product` (`pid`, `prodname`, `prodcost`, `instock`) VALUES (NULL, '$prodname', '$prodcost', '$instock');";
//print out the result
$result = mysqli_query($conn, $sql);



?>



