<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        
 
                body{
            background-image: url(../images/feed.jpg);
            background-size: cover;
    
            background-attachment: fixed;
            font-family:  sans-serif;
        }
        div.stars {
            width: 270px;
            display: inline-block;
        }

        input.star { display: none; }

        label.star {
            float: right;
            padding: 10px;
            font-size: 36px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked ~ label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked ~ label.star:before { color: #F62; }

        label.star:hover { transform: rotate(-15deg) scale(1.3); }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
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
	function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["q4"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(y==""){

    alert("Email must be filled out");
    return false;
  }
  else if(z==""){

alert("Star field must be filled out");
return false;
}
}
    function sendEmail() { 
	Email.send({ 
		Host: "smtp.gmail.com", 
		Username: "jumeirahresorthotel@gmail.com", 
		Password: "pigvuarygchgzgdc", 
		To: document.getElementById('email').value, 
		From: "jumeirahresorthotel@gmail.com", 
		Subject: "Feedback is successfully received!!!", 
		Body: "Thank you!", 
	}) 
		.then(function (message) { 
		 alert("mail sent successfully") 
		}); 
	} 
</script>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" ><img src="../images/jumeriah2.png"></a>
        </div>
    </nav>
    <!-- END nav -->

    <div class="block-30 block-30-sm item">
        <div class="container-fluid">
            <div class="jumbotron jumbotron">
                <div class="col-md-10">
                    
                    <h1 class="display-3"><b>Feedback form</b></h1>
                </div>
            </div>
        </div>
    </div>
   

    <div class="site-section">
        <div class="container">

            <div class="row block-9">
                <div class="col-lg-8 pr-lg-12">
                  
                    <iframe name="w" id="w" style="display:none;"></iframe>
                    <form name="myForm" onsubmit="return validateForm()" method="post">
                        <div class="form-group">
                            <h5>Name:</h5>
                            <input id="name" name="name" type="text" class="form-control px-3 py-3" style="border-radius: 6px; align-self: center;">
                        </div>
                        <div class="form-group">
                            <h5>Email:</h5>
                            <input id="email" name="email" type="text" class="form-control px-3 py-3" style="border-radius: 6px;" onchange="sendEmail()">
                        </div>

                        <div class="form-group">
                            <h5>1. What was your first impression when you entered the website?</h5>
                            <input id="q1" name="q1" type="text" class="form-control px-3 py-3" style="border-radius: 6px;"/>
                        </div>
                        <div class="form-group">
                            <h5>2. How did you first hear about us?</h5>
                            <input id="q2" name="q2" type="text" class="form-control px-3 py-3" style="border-radius: 6px;"/>
                        </div>
                        <div class="form-group">
                            <h5>3. Is there anything missing on this page?</h5>
                            <input id="q3" name="q3" type="text" class="form-control px-3 py-3" style="border-radius: 6px;"/>
                        </div>
                        <div class="form-group">
                            <h5>4. How likely are you to recommend us to a friend or colleague?</h5>
                            <div class="stars" id="star">
                                    <input class="star star-5" id="star-5" type="radio" name="q4" value="5"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="q4" value="4"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="q4" value="3"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="q4" value="2"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="q4" value="1"/>
                                    <label class="star star-1" for="star-1"></label>

                            </div>
                        </div>

                        <div class="form-group">
                            <input value="Submit" type="submit"  style="border-radius: 6px;" class="btn btn-primary py-3 px-5" onclick="sendEmail()">
                       <br>
                       <br>
                       <br>
                        </div>
                    </form>
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
              </footer>



        </div>
    </div>

   
</body>