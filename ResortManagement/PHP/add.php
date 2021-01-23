<?php
session_start();
include"connection.php";
$id=$_POST['id'];
$image=$_POST['image'];
$roomtype=$_POST['type'];
$numofrooms=$_POST['numberofrooms'];
$cost=$_POST['cost'];
$adults=$_POST['adults'];
$facility=$_POST['facility'];
$size=$_POST['size'];
$sql="INSERT INTO `rooms`(`id`, `image`, `roomtype`, `numberofrooms`, `cost_per_night`, `adults`,`facility`, `size`) 
VALUES ($id,'$image','$roomtype',$numofrooms,$cost,$adults,'$facility','$size')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('booking successful');</script>";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
header("location:../PHP/roomtable.php");


?>

