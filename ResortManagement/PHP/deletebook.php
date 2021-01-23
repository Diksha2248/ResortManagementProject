<?php
include"connection.php";
$phone=$_GET['phone'];
echo $phone;
$query="DELETE FROM `booking` WHERE phone=$phone";
mysqli_query($conn,$query);

header('location:booktable.php');


?>