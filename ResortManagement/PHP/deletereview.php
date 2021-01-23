<?php
include"connection.php";
$name=$_GET['name'];
$query="DELETE FROM `about` WHERE name='$name'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Review deleted successfully');</script>";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}



?>