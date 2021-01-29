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
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <fieldset>
        <legend align="Center">Add New Room</legend>
        <table>
            <form action="addroomdata.php" method="POST">
                <tr>
                    <td>Id</td>
                    <td><input type="number" name="id" placeholder="enter id"></td>
                </tr>
                <!-- <tr>
                    <td>Upload image</td>
                    <td> <input type="file" name="image" id="fileToUpload" value="add image"></td>
                </tr> -->
                <tr>
                    <td>Upload Picture</td>
                    <td> <input type="text" name="image" placeholder="insert img"> </td>
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><input type="text" name="roomtype" placeholder="enter room type"></td>
                </tr>
                <tr>
                    <td>Number of rooms</td>
                    <td><input type="number" name="numberofrooms" placeholder="enter numberofrooms"></td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td> <input type="number" name="cost_per_night" placeholder="enter price"></td>
                </tr>
                <tr>
                    <td>Adults</td>
                    <td><input type="number" name="adults" placeholder="enter no. of adults"></td>
                </tr>
                <tr>
                    <td>Facility</td>
                    <td><input type="text" name="facility" placeholder="enter facility"></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>  <input type="text" name="size" placeholder="enter size" ></td>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Add" value="Add"></td>
                </tr>
      
               
</form>  
</fieldset>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>