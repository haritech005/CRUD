<?php
  include 'connect.php';

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud`  (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
      header('location:display.php');
    }

  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        
    <form method="post">
      
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" >
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"  >
  </div>

  <div class="form-group">
    <label>Mobile </label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" autocomplete="off" >
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off"  >
  </div> <br>

 
  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
    </form>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

