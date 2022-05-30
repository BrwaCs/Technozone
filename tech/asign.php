
<?php
ob_start();
require 'config.php';


if(isset($_POST["adminlogin"])){
  $usernamee = test_input($_POST["username"]);
  $passwordd = test_input($_POST["password"]);
 

  $sign = mysqli_query($conn,"SELECT  `username`, `password` FROM `adminlogin` WHERE `username`='$usernamee' AND `password`='$passwordd'");
 $row=mysqli_fetch_array($sign);
if(is_array($row)){
  $_SESSION['usernamee']=$row['username'];
  $_SESSION['password']=$row['password'];
}else{
  if(empty($_SESSION['username']) || empty($_SESSION['password'])){
    $eroor['emp_eroor']="Username or Password is Empty";
  }
  
    echo
    "
    <script> windows.location:index.php </script>
    ";
  }

}


if(isset($_SESSION['usernamee'])){
header("Location:ad.php");

}
?>