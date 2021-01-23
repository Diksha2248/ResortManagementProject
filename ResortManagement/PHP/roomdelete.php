<?php
include"connection.php";
$id=$_GET['id'];
echo $id;
$query="DELETE FROM `rooms` WHERE id=$id";
mysqli_query($conn,$query);

header('location:roomtable.php');


?>