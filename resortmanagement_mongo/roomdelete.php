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
$db->rooms->deleteOne(['_id'=>$id]);
header('location:roomtable.php');
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
    ?>