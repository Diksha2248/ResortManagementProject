<?php
 include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Book now</title>
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

function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["mobile"].value;
  var a = document.forms["myForm"]["cardNumber"].value;
  var b = document.forms["myForm"]["roomno"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(y==""){

    alert("Email must be filled out");
    return false;
  }
  else if(z=="" ){

alert("Mobile no must be filled out");
return false;
}

else if(a==""){

alert("Card no must be filled out");
return false;
}
else if(b==""){

alert("No of rooms must be filled out");
return false;
}
}

</script>



	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../CSS/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../CSS/style.css" />
<style>
	        footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
        
}
</style>

		

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
		Subject: "Your Booking Status Confirmed", 
		Body: "Thank you!", 
	}) 
		.then(function (message) { 
		// alert("mail sent successfully") 
		}); 
	} 
</script>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" href="../index.php"><img src="../images/jumeriah2.png"></a>

        </div>
        
	</nav>

      
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
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
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<h1>Make your reservation</h1>

						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
                            <br>
                            <br>
							<form action="dispbook.php"  name="myForm" onsubmit="return validateForm()" method="post">
								<div class="form-group">
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
									<span class="form-label">Enter name</span>
									<input class="form-control" id="name" name="name" type="text" placeholder="name" >
                                </div>
                                <div class="form-group">
									<span class="form-label">Enter Email</span>
									<input class="form-control" id="email" name="email" type="text" placeholder=" Email" onchange="sendEmail()" >
                                </div>
                                <div class="form-group">
									<span class="form-label">Enter Mobile number</span>
									<input class="form-control" type="number"  id="mobileNumber"pattern="[0-9]{10}" name="mobile" placeholder="number">
                                </div>
                                <div class="form-group">
									<span class="form-label">Address</span>
                                    <textarea class="form-control" name="address" id="" cols="30" rows="2"></textarea>     
                                  </div>
                                <div class="form-group">
									<span class="form-label">Room type</span><br>
									<input type="radio" name="type" value="Family Room">Family Room<br>
                                    <input type="radio" name="type" value="Bachelors Room">Bachelors Room<br>
                                    <input type="radio" name="type" value="Classic Bungalow Cottage">Classic Bungalow Cottage<br>
                                    <input type="radio" name="type" value="Presidential Room">Presidential Room<br><br>
                                </div>
                                <div class="form-group">
									<span class="form-label">Card number</span>
									<input class="form-control"  id="cardNumber" name="cardNumber" type="text" placeholder="cardno">
                                </div>
                            
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" id="txtDate1" name="checkin" >		</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" id="txtDate" name="checkout">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control" name="roomno">
												<option value="1">1</option>
												<option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control" name="adults">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control" name="children">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
                                <input value="Submit" type="submit"  style="border-radius: 6px;" class="btn btn-primary py-3 px-5" onclick="sendEmail()">
             
								</div>
							</form>

						</div>

						  
					</div>

				</div>

			</div>
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
		</div>
    </div>
    <div>
   
</body>

</html>