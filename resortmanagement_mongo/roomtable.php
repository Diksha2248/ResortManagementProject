
<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
   
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->resortmanagement;
$mobj=$db->rooms->find();
}
catch(MongoConnectionException $e){
    var_dump($e);
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Booking Details</title>
  </head>
  <body>
    <div class="container">
        <div class="col-lg-12">
            <br>
            
<a href="admin.html" class="previous">&laquo; Go Back</a>

         <h1 class="text-warning text-center">Room Details <button class="btn-success btn"><a href="addroom.php" class="text-white">Add</a> </button> </td>
                      </h1>
         <br>
         <table class="table table-striped table-hover table-bordered text-center">
             <tr class="bg-dark text-white text-centered">
             <th>id</th>
                <th>image</th>
                 <th>Room type</th>
                 <th>Number of rooms</th>
                 <th>cost_Per_Night</th>
                 <th>Adults</th>
                 <th>Facilities</th>
                 <th>Size</th>
               <th>Update</th>
               <th>Delete</th>
             </tr>

             <?php
      foreach($mobj as $res){
          ?>
             <tr>
             <td><?php echo $res['_id'];?></td>
             <td> <img src="<?php echo $res['image'];?>" alt="rooms" height="200" width="310" ></td>
                 <td><?php echo $res['roomtype'];?></td>
                 <td><?php echo  $res['numberofrooms'];?></td>
                 <td><?php echo $res['cost_per_night'];?></td>
                 <td><?php echo $res['adults'];?></td>
                 <td><?php echo $res['facility'];?></td>
                 <td><?php echo $res['size'];?></td>
                 
                 <td> <button class="btn-warning btn"><a href="roomupdate1.php?id=<?php echo $res['_id'];?>"class="text-white">Update</a> </button> </td>
                 <td> <button class="btn-danger btn"><a href="roomdelete.php?id=<?php echo $res['_id'];?>" class="text-white">Delete</a> </button> </td>
                </tr>

       <?php 
}
?>
         </table>
        </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>