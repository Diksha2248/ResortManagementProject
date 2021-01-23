<?php
session_start();
include "connection.php";
$name=$_POST['name'];
$type=$_POST["type"];
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$roomno=$_POST["roomno"];
$adults=$_POST["adults"];
$children=$_POST["children"];
$email=$_POST["email"];
$mob=$_POST["mobile"];
$address=$_POST["address"];
$status="Booking confirmed";

$diff1=strtotime($_POST["checkout"])-strtotime($_POST["checkin"]);
$diff=abs(round($diff1/86400));
// echo $diff;

        switch ($type){
            case "Family Room":
                $total1=$roomno*$diff*245;
                // echo $total1;
            break;
            case "Bachelors Room":
                $total1=$roomno*$diff*150;
            break;
            case "Classic Bungalow Cottage":
                $total1=$roomno*$diff*1000;
            break;
            case "Presidential Room":
                $total1=$roomno*$diff*350;
            break;        

        }
         $sql="INSERT INTO `booking`(`name`, `phone`, `email`, `checkin`, `checkout`, `roomtype`, `numberofrooms`, `numberofdays`, `adults`, `children`, `address`, `cost`)
          VALUES ('$name',$mob,'$email','$checkin','$checkout','$type',$roomno,$diff,$adults,$children,'$address',$total1)";
        // $sql="INSERT INTO `booking`(`name`) VALUES ('$name') ";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('booking successful');</script>";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $sql2='SELECT * FROM rooms WHERE roomtype="'.$type.'"';
        // echo $sql2;
        $result = $conn->query($sql2);
        // echo "step1";
        if($result->num_rows > 0){
            // echo "step2";
            while($row = $result->fetch_assoc()){
                // echo "step3";
                $afterchange=$row['numberofrooms'];
                $afterchange=$afterchange-$roomno;
                // echo $afterchange;
                $updateroomdb='UPDATE rooms SET numberofrooms ="'.$afterchange.'" WHERE roomtype = "'.$type.'"';
                mysqli_query($conn, $updateroomdb);
            }
        }
        
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking details</title>
    <style>           #mydiv{
             background-image: url(../images/backgroung.jpg); 
             background-repeat: no-repeat;
             background-size: 100%;
             height: 470px; 
        
        }
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
th{
    background-color: black;
  color: white;
}

h2,h3,h4{
        color:cornsilk;
        font-size: 250%;
    }
    span{
        color:white;
        font-weight: 150%;
    }
        #mydiv{
             background-image: url(/images/img5.jpg); 
             background-repeat: no-repeat;
             background-size: 100%;
             height: 470px; 
        
        }
        #mydiv1{
            background-color: white;
            color: black;
            height: 80px;
            width:900px;
            margin: 0 auto;
            position: relative;
            top: 15%;
            text-align: center;
            padding: 10px;
            border: solid rgb(179, 177, 172) 9px;
        }
        footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
        
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <a class="navbar-brand" href="#"></a>
        <img src="../images/jumeriah2.png" alt="" height="70px" style="margin-left: 70px;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 350px;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              
              <a class="nav-link" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../HTML/contact.html">Contact</a>
              </li>
          </ul>
        
       
      <form class="d-flex">
      <a class="btn btn-primary" href="../HTML/logout.php" role="button" style="margin-right:20px;margin-top:20px;">Log Out</a>
 
	 </form>
  
  </div>       
</div>
        
</nav>
<div class="block-30 block-30-sm item">
        <div class="container-fluid">
            <div class="jumbotron jumbotron">
                <div class="col-md-10">
                    
                    <h1 class="display-3"><b>BOOKING DETAILS</b></h1>
                </div>
            </div>
        </div>
    </div>

<table style="width:100%">
      
      <tr>
          <th>Name</th>
          <th>Mobile_No</th>
          <th>checkin_Date</th>
          <th>checkout_Date</th>
          <th>Room Type</th>
          <th>No_of_rooms</th>
          <th>No_of_days</th>
          <th>total_cost($)</th>
          <th>Booking status</th>
</tr>
<tr>
          <td><?php echo $name; ?></td>
          <td> <?php echo $mob;?> </td>
          <td><?php echo  $checkin ;?></td>
          <td><?php echo$checkout;?></td>
          <td><?php echo $type;?></td>    
          <td> <?php echo  $roomno;?></td>
          <td><?php echo $diff; ?></td>
          <td><?php echo $total1; ?></td>
          <td><?php echo $status ;?></td>
       

</tr>

          </table>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <footer>
    <h4 class="heading-section">Contact Info</h4>
                           
    <li><span class="text">JUMEIRAH GROUP CORPORATE OFFICE
        Level 5, Building 5
        Dubai Design District
        PO Box 73137
        Dubai, UAE</span></li>
        <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +971 4 3665000</span></a></li>
        <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@jumeirah.com</span></a></li>
        <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
        <h6 class="heading-section">Please fill this form so that it may help us improve ourselves</h6>
        <a href="../html/form.html" class="btn btn-primary" style="text-emphasis-color: #1c7ff1; border-radius: 6px; ">Feedback</a>
  </footer>
</body>
</html>
