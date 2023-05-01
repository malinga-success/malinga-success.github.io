<?php
  $con = mysqli_connect('localhost','root');

  if($con){
    echo "Connection Successfull";
  }
  else{
    echo "Connection Failed";
  }

  mysqli_select_db($con, 'contactus');

  $sex = $_POST['sex'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $query = "INSERT INTO users (sex, username, email, message) VALUES ('$sex', '$username', '$email', '$message')";

  mysqli_query($con, $query);
  header('location:index.php');
?>