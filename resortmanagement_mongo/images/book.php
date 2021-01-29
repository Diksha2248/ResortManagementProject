
<!DOCTYPE html>
<html>

<head>
    <title>Jumeriah Frankfurt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
        body{
            background-image: url(../images/b.jpg);
            background-size: cover;
    
            background-attachment: fixed;
            font-family:  sans-serif;
        }
        footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
        </style>
    
</head>

<body>
    <?php
        session_start();
    ?>
    <!-- NAV nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" href="../index.php"><img src="../images/jumeriah2.png"></a>

        </div>
    </nav>
    <!-- END nav -->

    <div class="block-30 block-30-sm item" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                <h1 class="heading"><i><b><marquee direction="right" scrollamount="20">BOOK NOW:-</marquee></b></i></h1>
                </div>
            </div>
        </div>
    </div>


    <!--booking form-->

    <div class="site-section">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12">
                    <div class="block-32">
                        <form action="submit.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                <?php
                                  //  $id = $_GET["id"];
                                  //  $_SESSION["room_id"] = $id;
                                 //   $name = $_GET["room"];
                                 //   $cost = $_GET["cost"];
                                  //  $_SESSION["finalPrice"] = $cost;
                                   
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                                    <label for="checkin">Check In-</label>
                                    <input type="hidden" name="finalPrice"/>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" name="checkin_date" id="checkin_date" class="form-control" style="border-radius: 6px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                    <label for="checkin">Check Out-</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" name="checkout_date" id="checkout_date" class="form-control" style="border-radius: 6px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="checkin">Adults-</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="adults" id="adults" class="form-control" style="border-radius: 6px;" required>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="checkin">Children-</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="children" id="children" class="form-control" style="border-radius: 6px;" required>
                                                  <option value="0">0</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><br>


                            <div class="row block-10">
                                <div class="col-md-6 pr-md-6">

                                    <div class="form-group">
                                       Name: <input type="text" id="name" name="name" class="form-control" style="border-radius: 6px;" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                       Email- <input type="email" id="email" name="email" class="form-control" style="border-radius: 6px;" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group">
                                       Mobile number- <input type="text" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" title="10 Digit Phone Number" class="form-control " style="border-radius: 6px;" placeholder="Mobile Number" required>
                                    </div>Address-
                                    <div class="form-group">
                                        <textarea name="address" id="address" cols="30" rows="7" class="form-control" style="border-radius: 6px;" placeholder="Address" required></textarea>
                                    </div>


                                </div>
                                <div class="col-md-6 pr-md-6">
                                    <div class="form-group">
                                      Card number-<input type="text" id="cardNumber" name="cardNumber" class="form-control creditCard"  maxlength="19" style="border-radius: 6px;" placeholder="Card Number" required>
                                    </div>

                                    <div class="form-group">
                                        <!-- <textarea name="" id="" cols="30" rows="7" class="form-control" style="border-radius: 6px;" placeholder="Message"></textarea> -->
                                    Rooms-<input type="number" id="count" name="count" max="10" class="form-control"  style="border-radius: 6px;" placeholder="Number of Rooms" onkeyup="update()">
                                    </div>
                                    
                                </div>

                            </div>
                    <br>
                            <div class="row block-11">
                                <div class="col-md-12 pr-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary book_btn" style="border-radius: 6px; width: 20%; color:red" onclick="return check();" value="Book Room"/>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
        <br>


        <footer>
                <div class="col-md-6 col-lg-4">
                    <div class="block-23">
                        <h3 class="heading-section">Contact Info</h3>
                       
                            <li><span class="text">JUMEIRAH GROUP CORPORATE OFFICE
                            Level 5, Building 5
                            Dubai Design District
                            PO Box 73137
                            Dubai, UAE</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +971 4 3665000</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@jumeirah.com</span></a></li>
                            <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                        
                    </div>
                </div>
            
                <div class="col-md-6 col-lg-4">
                    <h4 class="heading-section">Please fill this form so that it may help us improve ourselves</h4>
                    <a href="../html/form.html" class="btn btn-primary" style="text-emphasis-color: #1c7ff1; border-radius: 6px; ">Feedback</a>
<!--                    https://goo.gl/forms/C3WuvXOCULSsIQyd2                -->
                </div>
            </div>

        </div>
    </footer>



</body>

</html>