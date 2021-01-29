<?php
include "connection.php";
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$rooms=$_POST["roomno"];
$roomtype=$_POST["type"];

$sql='SELECT * FROM rooms  WHERE roomtype="'.$roomtype.'"';
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['numberofrooms'] >=$rooms)
        {
            echo "<SCRIPT> //not showing me this
            alert('Room is Available')
            window.location.replace('./HTML/signin.html');
        </SCRIPT>";
        }else{
            echo "<SCRIPT> //not showing me this
            alert('Room is Not Available')
            window.location.replace('home.php');
        </SCRIPT>";
        }
    }
}else{
    echo "<SCRIPT> //not showing me this
        alert('Room is Not Available')
        window.location.replace('home.php');
    </SCRIPT>";
}
$conn->close();
?>