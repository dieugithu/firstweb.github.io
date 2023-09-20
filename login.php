<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $USERNAME=$_POST['username'];
    $PASSWORD=$_POST['password'];
  $sql="select * from registration where username ='$USERNAME'and password='$PASSWORD'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
    echo 'you have successfully loged in to my website';   
    session_start();
    $_USERNAME['username']=$username;
    header('location:home.php');
    }else{
        echo 'you have intered incorrect credentials';
        } 
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>log in page</title>
  </head>
  <body>
    <h1 class="text-center" >login to our Dieu Merci website</h1>
<div class="container mt-5 text-center w-50">

<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" placeholder="enter your email" Required name="username" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="enter your password" required name="password" >
  </div>
  <button type="submit" class="btn btn-primary w-100">login</button>
</form>
</div>
    
  </body>
</html>