

<?php

require 'config.php';
ob_start();



function test_input($data){
$data=htmlspecialchars($data);
$data=trim($data);
$data=stripslashes($data);
return $data;
}


if(isset($_POST["login"])){
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
 
 


  $sign = mysqli_query($conn,"SELECT  `username`, `password` FROM `usersignin` WHERE `username`='$username' AND `password`='$password'");
 $row=mysqli_fetch_array($sign);
if(is_array($row)){
  $_SESSION['username']=$row['username'];
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

if(isset($_SESSION['username'])){
header("Location:main.php");
}
?>


