<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
echo "Great Work!";

//sql staments

$pid = $_POST['pid'];
$prodcost = $_POST['prodcost'];
$instock = $_POST['instock'];


$sql = "UPDATE PRODUCT SET PRODCOST='$prodcost' WHERE PID='$pid';";
$sql1 = "UPDATE PRODUCT SET INSTOCK='$instock' WHERE PID='$pid';";
//print out the result
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql1);
echo "Success";
// header("Location: productview.php");

?>



