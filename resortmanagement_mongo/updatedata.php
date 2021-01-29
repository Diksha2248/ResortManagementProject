<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->trial;
$name=$_POST['name'];
$salary=$_POST['salary'];
echo $_SESSION['id'];
echo  $name;
echo $salary;

$db->youtube->updateOne(
    array('_id'=>$_SESSION['id']),
    array(
        '$set' => array(
            'name' => $name,
            'salary'=>$salary,
        )
        )
    );
        header('location:show.php');

    }catch(MongoConnectionException $e){
        var_dump($e);
    }
}
    ?>