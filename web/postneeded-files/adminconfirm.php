<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "sign-up";

$conn = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit'])){
  $email =$_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email ='$email' AND password = '$password'";

  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0){
    $_SESSION['admin'] = true;
    $a = "admin";
    echo "<script>alert('success');</script>";
    echo "<script>window.open('post.php','_blank')</script>";
    echo "<script>location.href='../../index.php?$a'</script>";
  }
  else{
    echo "<script>alert('fail')</script>";
    echo "<script>location.href='index.php'</script>";
  }
}
?>