<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;

   
$image=$_POST['image'];
$roomtype=$_POST['roomtype'];
$numofrooms=$_POST['numberofrooms'];
$cost=$_POST['cost_per_night'];
$adults=$_POST['adults'];
$facility=$_POST['facility'];
$size=$_POST['size'];
$id=$_SESSION['id'];
echo $_SESSION['id'];

$db->rooms->updateOne(
    array('_id'=>$_SESSION['id']),
    array(
        '$set' => array(
            'image' => $image,
            'roomtype'=>$roomtype,
            'numberofrooms'=>$numofrooms,
            'cost_per_night'=>$cost,
            'adults'=>$adults,
            'facility'=>$facility,
            'size'=>$size
        )
        )
 );
 header('location:roomtable.php');
    }catch(MongoConnectionException $e){
        var_dump($e);
    }
}
    ?>