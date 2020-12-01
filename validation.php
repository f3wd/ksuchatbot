<?php

session_start();

If (!isset($_SESSION["user"])){
         $_SESSION['user'] = $_POST['user'];
         header("Location:home.php");
}else{
      $_SESSION['user'] = $_POST['user'];

}
include 'connection.php'; 

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where username = '$name' && password = '$pass' ";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result) ;

if($num == 1){
    header('location:home2.php');
}else{
    header('location:Login.php');
}
?>