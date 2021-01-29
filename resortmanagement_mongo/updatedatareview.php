<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
$image=$_POST['image'];
$review=$_POST['review'];
$name=$_POST['name'];

$db->review->updateOne(
    array('_id'=>$_SESSION['id']),
    array(
        '$set' => array(
            'image'=>$image,
            'review'=>$review,
            'name' => $name
            
        )
        )
    );
        header('location:showreview.php');

    }catch(MongoConnectionException $e){
        var_dump($e);
    }
}
    ?>