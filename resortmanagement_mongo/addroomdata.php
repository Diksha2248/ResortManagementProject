<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
        if($_POST){
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
$rec['_id']=$_POST['id'];
$rec['roomtype']=$_POST['roomtype'];
$rec['image']=$_POST['image'];
$rec['numberofrooms']=$_POST['numberofrooms'];
$rec['cost_per_night']=$_POST['cost_per_night'];

$rec['adults']=$_POST['adults'];

$rec['facility']=$_POST['facility'];

$rec['size']=$_POST['size'];

  $db->rooms->insertOne($rec);
        }
        header('location:roomtable.php');
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
?>