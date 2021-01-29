<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$id=$_GET['id'];
$_SESSION['id']=$id;
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
$mObj=$db->review->findOne(array('_id'=>$id));
    }
catch(MongoConnectionException $e){
    var_dump($e);

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updatedatareview.php" method="POST">
    <input type="text" name="image"  value="<?php  echo $mObj['image'] ?>"><br>
 
    <input type="text" name="review"  value="<?php  echo $mObj['review'] ?>"><br>
 
  <input type="text" name="name"  value="<?php  echo $mObj['name'] ?>"><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>