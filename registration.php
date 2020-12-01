<?php
session_start();

header('location:login.php');

include 'connection.php';

$name = $_POST['user'];
$full = $_POST['full'];
$email = $_POST['email'];
$pass  = $_POST['password'];


$s = "select * from usertable where name = '$name'";
$p = "select * from usertable where email = '$email'";

$result = mysqli_query($con,$s);
$result2 =  mysqli_query($con,$p);
$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if($num == 1){
   echo '<script>alert("username already exist.")</script>';
}else {
      if($num2 == 1){
    echo '<script>alert("email already exist.")</script>';
    }else{

    $reg= " insert into usertable(username,full,email,password) values ('$name','$full','$email','$pass')";
     mysqli_query($con,$reg);
     echo '<script>alert("Registration successfully")</script>';
     }
}

?>