<?php
if(isset($_POST['btn_submit'])){
    //Connect to the db
    require 'db_conn.php';
    //Receive data from the user
    $product_name =mysqli_real_escape_string($conn,$_POST['pname']);
    $product_qtty = mysql_real_escape_string($conn,$_POST['qtty']);
    $product_price = mysqli_real_escape_string($conn,$_POST['price']);

    //To save the data, prepare

    $insert_query = "INSERT INTO 'product' ('id','name', 'quantity','price') VALUES (null, '','','')";
    //Finally excute query
    $save =mysqli_query($conn,$insert_query);

    //Check if the data  has been saves successfully

    if(!$save){
        echo "Failed submitting product";
    }else{
        header(  "location:index.php");
    }
}
