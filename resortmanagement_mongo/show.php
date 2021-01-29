<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
   
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->trial;
$mobj=$db->youtube->find();}
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
<h1>Show data  </h1> <a href="add.php">add</a>
    <table border=1>
      <tr>
        <td>name</td>
        <td>salary</td>
        <td>Id</td>
        <td>Update</td>
        <td>Delete</td>
        
      </tr>
      <?php
      foreach($mobj as $row){
          ?>
         <tr>
         <td><?php echo $row['name'] ?></td>
         <td><?php echo $row['salary'] ?></td>
         <td><?php echo $row['_id'] ?></td>
         <td> <a href="update.php?id=<?php echo $row['_id'] ;?>">update</a> </td>   
         <td> <a href="delete.php?id=<?php echo $row['_id'] ;?>">delete</a> </td>   
      
         </tr>
          <?php
      }?>
    </table>
</body>
</html>