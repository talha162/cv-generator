<?php
    if(isset($_POST['SubmitButton'])){ // Check if form was submitted
include 'config.php';
     
      $signup=array(0=>$_POST['fname'],1=>$_POST['lname'],2=>$_POST['email'],3=>$_POST['password']);
    
      $sql = "INSERT INTO users (fname, lname, email,password) 
      VALUES ('$signup[0]',
       '$signup[1]',
        '$signup[2]',
        '$signup[3]')";
      
      if ($conn->query($sql) === TRUE) {
        echo " <script>alert('Sign up Successful')</script>";
      } else {
        echo "<script>alert('Error:  $sql  <br>  $conn->error')</script>";
      }
      
      $conn->close();
    }
    if(!isset($_SESSION["uid"])){
      header('Location: cvmain.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body class="bg-success">
    
<div class="container-fluid mt-1">
    <div class="row vh-60 d-flex justify-content-center align-items-center ">
        <div class="col-md-3  ">
        <div class="card ">
  <div class="card-body ">
    <h5 class="card-title text-center fw-bolder fs-1 text-success">Signup</h5>
    <form action="#" method="post">
      <div class="form-group mt-1">
        <label for="inputfname1">First Name</label>
        <input type="text" name="fname" required class="form-control" id="inputfname1" aria-describedby="emailHelp" placeholder="First Name">
      </div>
      <div class="form-group mt-1">
        <label for="inputlname1">Last name</label>
        <input type="text" name="lname" required class="form-control" id="inputlname1" aria-describedby="emailHelp" placeholder="Last Name">
      </div>
      
<div class="form-group mt-1">
        <label for="inputemail1">Email address</label>
        <input type="email"  name="email" required  class="form-control" id="inputemail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group mt-1">
        <label for="inputpassword1">Password</label>
        <input type="password"  name="password" required class="form-control" id="inputpassword1" placeholder="Password">
      </div>
      <input type="submit" class="btn btn-success mt-2 " name="SubmitButton" value="Signup">
      <a href="login.php" class="text-success text-decoration-none ms-2">Login</a>
    </form>
    
  </div>
</div>
        </div>
    </div>
</div>

</body>
</html>