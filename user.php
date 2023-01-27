<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="insert into `curd` (nane,email,mobile,password)
  values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Data inserted successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
} 
?>


<!doctype html>
<html lang="en">
  <head>
 
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"></div>

    <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"></div>
  
    <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off"></div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your name" name="password"></div>

  <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
</form>
   </div>
   
  </body>
</html>

