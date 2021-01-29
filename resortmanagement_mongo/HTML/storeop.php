<?php
include("connection.php");
$rdb_value1 = $_POST['Name'];
$rdb_value2 = $_POST['email'];
$rdb_value3 = $_POST['password'];
$rdb_value4 = $_POST['Phone'];


if($rdb_value1!=''&&$rdb_value2!=''&&$rdb_value3!=''&&$rdb_value4!=''){
    $sql = "INSERT INTO login(Name,email,password,Phone) VALUES ('$rdb_value1', '$rdb_value2','$rdb_value3','$rdb_value4')";

}


if (mysqli_query($conn, $sql)) {
   echo "<script>alert('Account Created'); location.href='../HTML/signin.html';</script>";

} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();

?>