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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumeriah Frankfurt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
       footer{
            text-align:center;
            padding:3px;
            background-color:black;
            color:white;
        }
        </style>
   
       
<!-- Required meta tags -->
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <script src="https://smtpjs.com/v3/smtp.js"> </script>
<script type="text/javascript"> 
  function sendEmail() { 
  Email.send({ 
    Host: "smtp.gmail.com", 
    Username: "jumeirahresorthotel@gmail.com", 
    Password: "pigvuarygchgzgdc", 
    To: document.getElementById('email').value, 
    From: "jumeirahresorthotel@gmail.com", 
    Subject: "Your  successfully subscribed!!!", 
    Body: "Thank you!", 
  }) 
    .then(function (message) { 
    alert("mail sent successfully") 
    }); 
  } 
</script>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <a class="navbar-brand" href="../index.php"></a>
        <img src="logo.png" alt="" height="70px" style="margin-left: 70px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 350px;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./HTML/contact.html">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <a href="./HTML/signin.html"> <button type="button" class="btn btn-outline-primary" style="margin-right: 60PX;" >Book Now</button>
          </a> 
        </form>
        </div>
      </nav>
    <!-- END nav -->



    <div class="block-30 block-30-sm item" style="background-image: url('./images/img_7.jpg');"data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="subheading-sm">Rooms</span>
                    <h2 class="heading">Rooms &amp; Suites</h2>
                    <p>3D beautifully appointed rooms Elegantly designed and exquisitely furnished.Our 30 beautifully appointed suites and rooms at Frankfurt Resort range in size from 280 to480sqft.</p>
                    <p> The rooms overlook either the sprawing lush green mangroves of Germany or the mesmerising property view.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <br>
      <h3 style="text-align: center; color:rgb(199, 199, 50) ;">Types of Rooms offered:</h3>
      <br><div class="row">
      <?php
      foreach($mobj as $result){
          ?>

        <div class="col-lg-3 col-md-3 col-sm-12">
        <form>
        <div class="card" style="background-color:aqua">
 
        <img src="<?php echo $result['image'];?>"alt="rooms" height="300" width="272" class="img_fluid">
        <div class="card-body">
        <h6 class="card-title">Roomtype:<?php echo $result['roomtype'];?></h6>
        <h6 class="card-title">Cost/night:<?php echo $result['cost_per_night'];?></h6>
        <h6 class="card-title">Adults:<?php echo $result['adults'];?></h6>
        <!-- <h6 class="card-title">Category:<?php echo $result['category'];?></h6> -->
        <h6 class="card-title">Facility:<?php echo $result['facility'];?></h6>
        <h6 class="card-title">size:<?php echo $result['size'];?></h6>
       
       
        </div>
        </div>
        </form>
        </div>
        <br>
        <?php
    }

?>
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!--     

    <div class="block-22">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="heading mb-4">Be Sure To Get Our Promos</h2>
                    <form action="formemail.php" class="subscribe">
                        <div class="form-group">
                            <input type="email" class="form-control email" placeholder="Enter your email" name="email" id="email" onchange="sendEmail()">
                            <input type="submit" class="btn btn-primary submit">
                            <button type="button" class="btn btn-primary submit" onclick="sendmail();">Subscribe</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div> 
   <br>
   <br>
   <br>
   <br>
   <br>
   <br> 


    <footer class="footer">
    
    <h4 class="heading-section" >Contact Info</h4>
                           
    <li><span class="text">JUMEIRAH GROUP CORPORATE OFFICE
        Level 5, Building 5
        Dubai Design District
        PO Box 73137
        Dubai, UAE</span></li>
        <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +971 4 3665000</span></a></li>
        <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@jumeirah.com</span></a></li>
        <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
        <h6 class="heading-section">Please fill this form so that it may help us improve ourselves</h6>
        <a href="form.php" class="btn btn-primary" style="text-emphasis-color: #1c7ff1; border-radius: 6px; ">Feedback</a>
      
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>