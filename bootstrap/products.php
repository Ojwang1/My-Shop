<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR SHOP/ PRODUCTS</title>
    <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.js."></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <title>Our Shop Home</title>
  <script src="bootstrap/js/jquery-3.4.0.js"></script>
 

</head>
<body>
    <h1 class="text-muted text-center"> Ojwang Students Center Products</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>PRODUCTS NAME</th>
            <th>PRODUCTS QUANTITY</th>
            <th>PRODUCT PRICE</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        <?php
        //start by connection to the db
        require 'db_conn.php';
        //To display data, prepare a select query

        $select_query = "SELECT * FROM `products`  WHERE 1";
        //finally excute the query and display the records on table rows

        $products = mysqli_query($conn,$select_query);
        //loop through the data to display each row at a time
        while ($row = mysqli_fetch_assoc($products)){
            extract($row);
            echo "<tr>

            <td>$name</td>
            <td>$quantity</td>
            <td>$price</td>
            <td><a href='#' class='btn btn-danger btn-block'>Delete</a></td>
            <td><a href='#' class='btn btn-primary btn-block'>update</a></td>

            </tr>";

        }
        
        ?>
    </table>
    
</body>
</html>