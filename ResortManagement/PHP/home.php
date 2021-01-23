<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Jumeriah Frankfurt Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        var maxDate1 = year + '-' + month + '-' + day;

        $('#txtDate').attr('min', maxDate);
         $('#txtDate1').attr('min', maxDate1);
    });
    </script>
    <style>

        #mydiv{
             background-image: url('../images/img5.jpg'); 
             background-repeat: no-repeat;
             background-size: 100%;
             height: 470px; 
        
        }
        #mydiv1{
            background-color: white;
            color: black;
            height: 100px;
            width:900px;
            margin: 0 auto;
            position: relative;
            top: 15%;
            text-align: center;
            padding: 10px;
            border: solid rgb(179, 177, 172) 9px;
        }
    
    #mydiv2{
            position:relative;
           }
     #mydiv2::before{
 content:"";
position:absolute;
width:100%;
height:500px;
left:0;
top:0;
z-index:-1;
opacity:0.5;
background-image: url("../images/img8.jpg");
background-repeat: no-repeat;
background-size: 100%;
text-align: center;
/* width:100%; */
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
    <marquee behavior="scroll" direction="right" style="color: black;background-color: rgb(116, 199, 224);">Hurry Up!!!  Contact Now   +919714366500   info@jumeirah.com </marquee>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <a class="navbar-brand" href="#"></a>
        <img src="../images/logo.png" alt="" height="70px" style="margin-left: 70px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 350px;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../PHP/home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../PHP/rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../PHP/services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../HTML/contact.html">Contact</a>
              </li>
          </ul>
        
          <form class="form-inline my-2 my-lg-0">
           <a href="../HTML/signin.html"><button type="button" class="btn btn-outline-primary" style="margin-right: 60PX;" href="../files/book1.php">Book Now</button>
           </a>
          </form>
        </div>
      </nav>
        <div id="mydiv">

            <p style="font-size:50px;padding: 100px;text-align:center;color: black;font-style:normal;"><b>ENJOY A LUXURY <br> EXPERIENCE</b></p>
            <?
    if($checkin==''&&$checkout==""&&$rooms==''&&$roomtype==''){
    ?>
            <div id="mydiv1">
                  <form action="ca.php" method="POST">
                    Check in<input type="date" id="txtDate" name="checkin"/>
                    Check out<input type="date" id="txtDate1" name="checkout" />
                    
                        Rooms
                        <select name="roomno">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                        </select>
                        Room Type
                        <select name="type">
                         <option value="Family room">Family room</option>
                         <option value="Bachelors Room">Bachelors Room</option>
                         <option value="Classic Bungalow Cottage">Classic Bungalow Cottage</option>
                         <option value="Presidential Room">Presidential Room</option>
                        </select><br>
                        <input type="submit" style="margin-top:5px;" class="btn btn-secondary btn-sm " value="Check" id="check">
                      </form>
            </div>
            <!-- <a href="show_result.php" title=""> <button>Check Availability</button></a> -->
            <?}?>
          </div>
     <br>
    <br>
    <br>
    <br>
     <div class="row featurette">
       <div class="col-md-7">
         <h2 class="featurette-heading" style=" color: rgb(218, 218, 77);"> &nbsp THE JUMERIAH FRANKFURT <span style="color: black;">RESORT</span> </h2>
         <p class="lead">  &nbsp These luxurious yet fair priced hotels are at International Airport before  Gurgaon Known as a &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp Corporate Hub and at Ghevra (a luxury Resort on main Rohtak Road). We believe that guests deserve a  &nbsp hotel just as unique, intimate and charming as their host city. Whether you’re in town for business or  &nbsp  &nbsp  &nbsp pleasure, we have just the hotel to suit your budget and personal tastes. The resort at Ghevra is the  &nbsp  &nbsp  &nbsp  &nbsp luxury retreat so close to central Delhi yet so peaceful and relaxing. Both the Hotels are well equipped  &nbsp  &nbsp with modern conferencing facilities for conducting business meetings, product launches, dealer  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   incentives, business presentation, social functions, marriages and personal get together.
       </div>
       <div class="col-md-5">
       <img src="../images/img12.jpg" class="bd-placeholder-img" width="500px" height="500px">
       </div>
     </div>
     <br>
     <br>
     <div style="background-color: rgb(196, 221, 223); height: 450px; width: 100%;">
        <h2 class="featurette-heading" style="text-align: center; padding: 20px; margin-left: 20px; color: rgb(199, 199, 50);">EXPLORE OUR <span style="color: black;">RESORT</span> </h2>
       <br>
        <div class="card-columns">
         <div class="card" style="width: 360px; margin-left: 20px;">
             <img class="card-img-top" src="../images/img2.jpg" alt="" height="260px">
         </div>
         <div class="card" style="width: 360px;">
             <img class="card-img-top" src="../images/img4.jpg" height="260px" alt="">
         </div>
         <div class="card" style="width: 360px;">
            <img class="card-img-top" src="../images/img1.jpg" height="260px"alt="">
        </div>
     </div>
      </div>
      <br>
      <h3 style="text-align: center; color:rgb(199, 199, 50) ;">ACCOMODATION WE OFFER</h3>
      <br>
      
      <div class="card-group">
          <div class="card" style="text-align: center; width: 70px; margin-left: 20px; margin-right: 20px;">
          <a href="../PHP/rooms.php"><img class="card-img-top" src="../images/bg_2.jpg" alt="Card image cap"height:"200px"  width: "20px"></a>      <div class="card-body">
                  <p class="card-text"><b>Large Family Room</b></p>
              </div>
          </div>
          <div class="card"style=" text-align:center; width: 70px; margin-left: 20px; margin-right: 20px;">
          <a href="../PHP/rooms.php"><img class="card-img-top" src="../images/img_3.jpg" alt="Card image cap" height:"200px"  width: "20px"></a>  
          <div class="card-body">
                  <p class="card-text"><b>Single Room Cottage</b></p>
              </div>
          </div>
          <div class="card"style="text-align:center; width: 70px; margin-left: 20px; margin-right: 20px;  ">
          <a href="../PHP/rooms.php"> <img class="card-img-top" src="../images/img_4.jpg" alt="Card image cap" height:"200px"  width: "20px"></a> 
          <div class="card-body">
                <p class="card-text"><b>Classic Bungalow Cottage</b></p>
            </div>
        </div>
        <div class="card"style="text-align:center;width: 70px; margin-left: 20px; margin-right: 20px;">
          <a href="../PHP/rooms.php"><img class="card-img-top" src="../images/img_5.jpg" alt="Card image cap" height:"200px"  width: "20px"></a>  
          <div class="card-body">
                <p class="card-text"><b>Deluxe Bungalow Cottage</b></p>
            </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div id="mydiv2"> 
        <h4 style="color:rgb(128, 49, 49); text-align: center;padding: 10px;">OUR SERVICES</h4>
        
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-6">
            <a href="../PHP/services.php">
            <img  src="../images/gaicon.png" width="170px" height="160px" alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
</a>
            <p> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  <b>GAMES</b> </p>
</div>
<div class="col-md-2 col-sm-2 col-xs-6">
  <a href="services.php">
        <img  src="../images/restaurant1.jpg" alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
</a>
        <p> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<b>RESTUARANT</b> </p> 
    </div>
    <div class="col-md-2 col-sm-2 col-xs-6">
    <a href="../PHP/services.php">
        <img  src="../images/gicon.jfif" width="170px" height="160px" alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
</a>
        <p> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <b>GYM</b> </p> 
    </div>
    <div class="col-md-2 col-sm-2 col-xs-6">
    <a href="../PHP/services.php">
        <img  src="../images/pool.png" alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
</a>
        <p> &nbsp &nbsp &nbsp &nbsp &nbsp  <b>SWIMMING POOL</b> </p> 
    </div>
    <div class="col-md-2 col-sm-2 col-xs-6">
    <a href="../PHP/services.php"><img  src="../images/guest.png" alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
</a>
 <p> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<b>GUEST HOUSE</b> </p> 
    </div>
    <div class="col-md-2 col-sm-2 col-xs-6">
    <a href="../PHP/services.php"><img  src="../images/wifi2.png"alt="Card image cap" style=" border: black solid; border-radius: 50%;margin-left: 30px;margin-right: 45px;">
       <a>
          <p> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  <b>FREE-WIFI</b> </p> 
    </div>
   </div>
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
            <a href="../PHP/form.php" class="btn btn-primary" style="text-emphasis-color: #1c7ff1; border-radius: 6px; ">Feedback</a>
      </footer>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>