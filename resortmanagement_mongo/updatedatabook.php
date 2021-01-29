<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
// $id=$_POST['_id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$type=$_POST['type'];
$roomno=$_POST['roomno'];
// $numberofdays=$_SESSION['numberofdays'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$address=$_POST['address'];


echo $_SESSION['id'];

$db->booking->updateOne(
    array('_id'=>$_SESSION['id']),
    array(
        '$set' => array(
            'name' => $name,
            'mobile'=>$mobile,
            'email'=>$email,
            'checkin'=>$checkin,
            'checkout'=>$checkout,
            'type'=>$type,
            'roomno'=>$roomno,
            'adults'=>$adults,
            'children'=>$children,
            'address'=>$address
              )
        )
    );
        header('location:bookshow.php');

    }catch(MongoConnectionException $e){
        var_dump($e);
    }
}
    ?>