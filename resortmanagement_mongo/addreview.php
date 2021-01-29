<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
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
    <form action="adddatareview.php" method="POST">
    <input type="number" name="_id" placeholder="id"><br>
    <input type="text" name="image" placeholder="image"><br>
    <input type="text" name="review"placeholder="review" ><br>
    <input type="text" name="name" placeholder="name"><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>