<?php
$user = $_POST['Username'] ;
$pass = $_POST['U_password'];
if($user == "admin" && $pass == "12345"){
    header("location:website.php");
}
else{
  header("location:index.php?a=1");
  
}
?>