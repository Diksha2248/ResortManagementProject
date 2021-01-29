<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
        $id=$_GET['id'];
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
echo $id;
$db->booking->deleteOne(array('_id'=>$id));
header('location:bookshow.php');
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
    ?>