<?php  
session_start();
 include('connection.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE email='$email' and 
      password ='$password' ";
 
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

    if($row == 1){
        echo"<script>
        alert('login successful!!!');
        </script>";
    $_SESSION['email']=$email;
    header("location:../admin.html");
    exit();
    
  }else{
    echo"<script>
    alert('login failed');
    window.location.href='adminsignin.html';
    </script>";
    exit();
  }

}
?>
