<?php
session_start();
include"connection.php";
$name=$_POST['name'];
$image=$_POST['image'];
$review=$_POST['review'];

$sql="INSERT INTO `about`(`image`, `review`, `name`) 
VALUES ('$image','$review','$name')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Review inserted successfully');</script>";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
header("location:../PHP/reviewtable.php");


?>