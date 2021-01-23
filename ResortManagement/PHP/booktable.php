
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
            
<a href="../HTML/admin.html" class="previous">&laquo; Go Back</a>

         <h1 class="text-warning text-center">Booking Details</h1>
         <br>
         <table class="table table-striped table-hover table-bordered text-center">
             <tr class="bg-dark text-white text-centered">
                 
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Email</th>
                 <th>Checkin</th>
                 <th>Checkout</th>
                 <th>Room type</th>
                 <th>Number of rooms</th>
                 <th>Number of days</th>
                 <th>Adults</th>
                 <th>Children</th>
                 <th>Address</th>
                 <th>Cost</th>
                 <th>Delete</th>
                 <th>Update</th>
             </tr>
             <?php 
include "connection.php";
$sql = "SELECT * FROM booking";
$query=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($query))
{
?>
             <tr>
             
                 <td><?php echo $name=$res['name'];?></td>
                 <td><?php echo $phone= $res['phone'];?></td>
                 <td><?php echo $email=$res['email'];?></td>
                 <td><?php echo $res['checkin'];?></td>
                 <td><?php echo $res['checkout'];?></td>
                 <td><?php echo $res['roomtype'];?></td>
                 <td><?php echo $res['numberofrooms'];?></td>
                 <td><?php echo $res['numberofdays'];?></td>
                 <td><?php echo $res['adults'];?></td>
                 <td><?php echo $res['children'];?></td>
                 <td><?php echo $res['address'];?></td>
                 <td><?php echo $res['cost'];?></td>
                 <td> <button class="btn-danger btn"><a href="deletebook.php?phone=<?php echo $res['phone'];?>" class="text-white">Delete</a> </button> </td>
                 <td> <button class="btn-warning btn"><a href="bookupdate.php? na=<?php echo $res['name'];?> & rt=<?php echo $res['roomtype'];?> & ph=<?php echo $res['phone'];?> & em=<?php echo $res['email'];?> & ci=<?php echo $res['checkin'];?> & co=<?php echo $res['checkout'];?> &  nr=<?php echo $res['numberofrooms'];?>
                 & nd=<?php echo $res['numberofdays'];?> & ad=<?php echo $res['adults'];?> & ch=<?php echo $res['children'];?> 
                 & add=<?php echo $res['address'];?> & cs=<?php echo $res['cost'];?>" class="text-white">Update</a> </button> </td>
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