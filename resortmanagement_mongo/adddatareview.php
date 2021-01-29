<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
        if($_POST){
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
$rec['_id']=$_POST['_id'];
$rec['image']=$_POST['image'];
$rec['review']=$_POST['review'];
$rec['name']=$_POST['name'];

$db->review->insertOne($rec);
        }
        header('location:showreview.php');
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
?>