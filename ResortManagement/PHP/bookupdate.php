<?php
include("connection.php");
error_reporting(0);
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
        <legend align="Center">Update Booking Details</legend>
       
        <table>
            <form action="" method="GET">
           
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" value="<?php echo $_GET['na'];?>"></td>
                </tr>
               <tr>
               <tr>
                    <td>Room type</td>
                    <td> <input type="text" name="type" value="<?php echo $_GET['rt'];?>"></td>
                </tr>
               <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="phone"  value="<?php echo $_GET['ph'];?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input type="text" name="email"   value="<?php echo $_GET['em'];?>"></td>
                </tr>
                <tr>
                    <td>Checkin date</td>
                    <td><input type="text" name="checkin"  value="<?php echo $_GET['ci'];?>"></td>
                </tr>
                <tr>
                    <td>Checkout date</td>
                    <td><input type="text" name="checkout" value="<?php echo $_GET['co'];?>"></td>
                </tr>
                <tr>
                    <td>NumberOfRooms</td>
                    <td>  <input type="text" name="numberofrooms" value="<?php echo $_GET['nr'];?>" ></td>
                </tr>
                <tr>
                    <td>NumberOfDays</td>
                    <td>  <input type="text" name="numberofdays" value="<?php echo $_GET['nd'];?>" ></td>
                </tr>
                <tr>
                    <td>Adults</td>
                    <td>  <input type="text" name="adult" value="<?php echo $_GET['ad'];?>" ></td>
                </tr>
                <tr>
                    <td>Children</td>
                    <td>  <input type="text" name="child" value="<?php echo $_GET['ch'];?>" ></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>  <input type="text" name="address" value="<?php echo $_GET['add'];?>" ></td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>  <input type="text" name="cost" value="<?php echo $_GET['cs'];?>" ></td>
                </tr>

                   <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
      
               
</form>  


</fieldset>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
if($_GET['update']){
   
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$roomtype=$_GET['type'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$numberofrooms=$_GET['numberofrooms'];
$numberofdays=$_GET['numberofdays'];
$adult=$_GET['adult'];
$child=$_GET['child'];
$address=$_GET['address'];
$cost=$_GET['cost'];
$query="UPDATE booking SET  name='$name',email='$email',checkin='$checkin',
checkout='$checkout',roomtype='$roomtype' ,numberofrooms='$numberofrooms' ,numberofdays='$numberofdays',
adults='$adult',children='$child',address='$address',cost='$cost' WHERE phone='$phone'";
$data=mysqli_query($conn,$query);
if($data){
    echo"record updated successfully";
    header('location:booktable.php');
}
else{
    echo"record not updated successfully";
}

}
// else{
//     echo"click here to update records";
// }




?>


</body>
</html>