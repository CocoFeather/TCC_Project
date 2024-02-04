<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['submit'])){

    $clothes_id = $_POST['clothes_id'];
    $clothes_name = $_POST['clothes_name'];
    $clothes_type = $_POST['clothes_type'];
    $clothes_brand = $_POST['clothes_brand'];
    $clothes_size = $_POST['clothes_size'];
    $clothes_price = $_POST['clothes_price'];
    $clothes_stock = $_POST['clothes_stock'];

    $sql = "UPDATE clothes 
    SET clothes_name = '$clothes_name',
    clothes_type = '$clothes_type',
    clothes_brand = '$clothes_brand',
    clothes_size = '$clothes_size',
    clothes_price = '$clothes_price',
    clothes_stock = '$clothes_stock'
    WHERE clothes_id = '$clothes_id'";

    if ($con->query($sql) === TRUE) {
          mysqli_close($con);
          echo '<script>alert("Clothes updated successfully!");</script>';
          echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';

    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

} else{
  echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
}  
?>
