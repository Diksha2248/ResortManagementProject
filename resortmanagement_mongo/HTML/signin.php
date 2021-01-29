<?php  
session_start();
 include('connection.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login` WHERE email='$email' and 
      password ='$password' ";
 
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

    if($row == 1){
        echo"<script>
        alert('login successful!!!');
        </script>";
    $_SESSION['email']=$email;
    header("location:../book1.php");
    exit();
    
  }else{
    echo"<script>
    alert('login failed');
    window.location.href='signin.html';
    </script>";
    exit();
  }

}
?>
