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

    $sql = "INSERT INTO clothes (clothes_name, clothes_type, clothes_brand, clothes_size, clothes_price, clothes_stock)
            values ('$clothes_name', '$clothes_type','$clothes_brand','$clothes_size','$clothes_price','$clothes_stock')";

    if ($con->query($sql) === TRUE) {

          // auto-generated ID for the new Clothe (auto increment)
          $clothes_id = $conn->insert_id;

          // registration table
          // $registration_date = date("Y-m-d H:i:s"); // current date time

          // $sql = "UPDATE admin SET last_update_time = "$registration_date";
          // $conn->query($sql);

          mysqli_close($con);
          echo '<script>alert("Clothes Added successfully!");</script>';
          echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';

    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

} else{
  echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
}  
?>
