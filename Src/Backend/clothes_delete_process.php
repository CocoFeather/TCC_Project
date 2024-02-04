<?php
session_start();
include 'dbconnect.php';

if(isset($_GET['id'])){

    $clothes_id = $_GET['id'];

    $sql = "DELETE FROM clothes WHERE clothes_id = '$clothes_id'";
    if ($con->query($sql) === TRUE) {
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

} else{
  echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
}  
?>
