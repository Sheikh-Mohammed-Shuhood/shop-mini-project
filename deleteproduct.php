<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die("Unable to connect to database");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/product.css" />
   
    <link rel="stylesheet" href="../search.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.html">customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dealer.html">Dealer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.html">product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update.html">update</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update.html">Delete</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success me-2" type="submit">
                            delete
                        </button>
                       
                    </form>
                    
                </div>
            </div>
        </nav>
    </div>
    
    <div class="container-sm col-sm-5 mt-md-3" >

        <form class="d-flex" role="search" method="post" id="search">
            <input class="form-control me-2" placeholder="Search" aria-label="Search" name="searchstr" id="search-input" />
            <button name="del" class="btn btn-outline-success" type="submit">Delete</button>

        </form>
    </div>
    

    <?php
       

        if(isset($_POST["del"])){
            echo "<div class='container table table-bordered table-responsive-sm mt-3' id='secondTable'>";
            echo " <table class='table'>";
            echo "<thead>";
            echo "  <tr>";
            echo "    <th>Product ID</th>";
            echo "    <th>Product</th>";
            echo "    <th>Price</th>";
            echo "    <th>Stock</th>";
            echo "  </tr>";
            echo " </thead>";
            echo "<tbody>";
            // Fetch data from the database

            $result7 = mysql_query("SELECT * FROM PRODUCT WHERE PID='$_POST[searchstr]'");
if(mysql_num_rows($result7) == 0) {
     // row not found, do stuff...
     echo "No element";
} else {
    // do other stuff...
    echo "Element present";
}
            // $result5 = $mysqli->query("SELECT * FROM PRODUCT WHERE PID='$_POST[searchstr]'");
            // if($result5->num_rows == 0) {
            //     // row not found, do stuff...
            //     echo "No element";
            // } else {
            //     // do other stuff...
            //     echo "Element present";
            // }

            $my = "SELECT * FROM PRODUCT WHERE PID='$_POST[searchstr]'";
            $x = mysqli_query($conn,$my);
            $sql = "DELETE FROM product WHERE PID= '$_POST[searchstr]'";
            mysqli_query($conn,$sql);
            
            // Loop through each row of data
           
            $message="Successful";         
            echo "<script type='text/javascript'>alert('$message');</script>";

            echo "<div class='container table table-bordered table-responsive-sm mt-5' id='originalTable'>";
            echo " <table class='table'>";
            echo "<thead>";
            echo "  <tr>";
            echo "    <th>Product ID</th>";
            echo "    <th>Product</th>";
            echo "    <th>Price</th>";
            echo "    <th>Stock</th>";
            echo "  </tr>";
            echo " </thead>";
            echo "<tbody>";
            // Fetch data from the database
            // $sql = "DELETE FROM product WHERE PID= '$_POST[searchstr]'";    
            // $ar = mysqli_affected_rows($conn);
            // echo "$ar";

                // // Loop through each row of data
                // while ($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //     echo "<td>" . $row["PID"] . "</td>";
                //     echo "<td>" . $row["PRODNAME"] . "</td>";
                //     echo "<td>" . $row["PRODCOST"] . "</td>";
                //     echo "<td>" . $row["INSTOCK"] . "</td>";
                //     echo "</tr>";
                // }
                $message="un-Successful";         
                echo "<script type='text/javascript'>alert('$message');</script>";
            

            // header("Location: productview.php");
            
        }
    ?>
    </tbody>
    </table>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>