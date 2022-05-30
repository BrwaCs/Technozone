<?php
require 'config.php';
function test_inputt($data){
  $data=htmlspecialchars($data);
  $data=trim($data);
  $data=stripslashes($data);
  return $data;
  }


if(isset($_POST["signup"])){
  $username = test_inputt($_POST["username"]);
  $password = test_inputt($_POST["password"]);
  $email = test_inputt($_POST["email"]);
 
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  
 


  if(!empty($_POST['submited'])&&$_POST['submited']=="true"){
    if(empty($_POST['username'])&&empty($_POST['email'])&&empty($_POST['password'])){
      echo
      "
      <script> alert('Username - Password - Email  is empty'); </script>
      ";
    }
   elseif (empty($_POST['username'])){
      echo
      "
      <script> alert('Username is empty'); </script>
      ";
    }elseif(empty($_POST['email'])){
      echo
      "
      <script> alert('Email is empty'); </script>
      ";
    }elseif(empty($_POST['password'])){
      echo
      "
      <script> alert('Password is empty'); </script>
      ";
    } elseif(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
      echo
      "
      <script> alert('Please Write Password with contain small and capitall and number and at least 8 character'); </script>
      ";
    }elseif( strlen($username) < 6) {
      echo
      "
      <script> alert('username must be at least 6 characters'); </script>
      ";
    }

    else{
      $username=$_POST ['username'];
      $password=$_POST ['password'];
      $email=$_POST ['email'];

      $query = "INSERT INTO `usersignin` (`username`, `password`, `email`) VALUES('$username', '$password', '$email')";
      mysqli_query($conn,$query);
      echo
      "
      <script> alert('Data Inserted Successfully'); </script>
      ";
    }}}
  






?>