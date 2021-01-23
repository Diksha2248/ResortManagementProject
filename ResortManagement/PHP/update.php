<?php
session_start();
include("connection.php");
if(isset($_POST['done'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $type=$_POST['type'];
    $numofrooms=$_POST['roomno'];
    $address=$_POST['address'];
    $adults=$_POST['adults'];
    $chid=$_POST['child'];
    $status="Booking confirmed";

$diff1=strtotime($_POST["checkout"])-strtotime($_POST["checkin"]);
$diff=abs(round($diff1/86400));
// echo $diff;

        switch ($type){
            case "Family Room":
                $total1=$numofrooms*$diff*245;
                // echo $total1;
            break;
            case "Bachelors Room":
                $total1=$numofrooms*$diff*150;
            break;
            case "Classic Bungalow Cottage":
                $total1=$numofrooms*$diff*1000;
            break;
            case "Presidential Room":
                $total1=$numofrooms*$diff*350;
            break;        
        }

    $sql="UPDATE `booking` SET `id`=$id,`name`='$name',`phone`=$phone,`email`='$email',`checkin`='$checkin',`checkout`='$checkout',`roomtype`='$type',`numberofrooms`=$numofrooms,`numberofdays`=$diff,`adults`=$adults,`children`=$chid,`address`='$address',`cost`=$total1 WHERE id=$id";
    echo $sql;
    mysqli_query($conn,$sql);
   header('location:booktable.php');
}

?>
