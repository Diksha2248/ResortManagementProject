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
        <legend align="Center">Update Room</legend>
       
        <table>
            <form action="" method="GET">
            <tr>
                    <td>ID</td>
                    <td> <input type="text" name="id" value="<?php echo $_GET['id'];?>"></td>
                </tr>
              
                <tr>
                    <td>Room type</td>
                    <td> <input type="text" name="type" value="<?php echo $_GET['rt'];?>"></td>
                </tr>
               
                    <td>Number of rooms</td>
                    <td><input type="text" name="numberofrooms"  value="<?php echo $_GET['nr'];?>"></td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td> <input type="text" name="cost"   value="<?php echo $_GET['cn'];?>"></td>
                </tr>
                <tr>
                    <td>Adults</td>
                    <td><input type="text" name="adults"  value="<?php echo $_GET['ad'];?>"></td>
                </tr>
                <tr>
                    <td>Facility</td>
                    <td><input type="text" name="facility" value="<?php echo $_GET['fy'];?>"></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>  <input type="text" name="size" value="<?php echo $_GET['sz'];?>" ></td>
                <tr>
                <tr>
                    <td>image</td>
                    <td>  <input type="text" name="image" value="<?php echo $_GET['im'];?>" ></td>
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
$id=$_GET['id'];    
$image=$_GET['image'];
$roomtype=$_GET['type'];
$numofrooms=$_GET['numberofrooms'];
$cost=$_GET['cost'];
$adults=$_GET['adults'];
$facility=$_GET['facility'];
$size=$_GET['size'];
$query="UPDATE rooms SET  image='$image',numberofrooms='$numofrooms',cost_per_night='$cost',adults='$adults',facility='$facility',size='$size' ,roomtype='$roomtype' WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    echo"record updated successfully";
    header('location:roomtable.php');
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