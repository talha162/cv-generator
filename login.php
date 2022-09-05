<?php
include 'config.php';
if(isset($_POST['SubmitButton'])){ // Check if form was submitted
  session_start();
$email=$_POST['email'];
$password1=$_POST['password'];
$sql = "SELECT * FROM `users` WHERE email='$email' and password='$password1';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 $_SESSION["uid"] = $row['uid'];
 $_SESSION["fname"] = $row['fname'];
    
} else {
    echo " <script>alert('invalid email or password')</script>";
}
if(isset($_SESSION["uid"])){
  header('Location: cvmain.php');
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body class="bg-success">
    
<div class="container-fluid  ">
    <div class="row vh-100 d-flex justify-content-center align-items-center ">
        <div class="col-md-3  ">
        <div class="card ">
  <div class="card-body ">
    <h5 class="card-title text-center fw-bolder fs-1 text-success">Login</h5>
    <form action="#" method="post">
      <div class="form-group mt-1">
        <label for="inputemail1">Email address</label>
        <input type="email"  name="email"  required class="form-control" id="inputemail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group mt-1">
        <label for="inputpassword1">Password</label>
        <input type="password"  name="password" class="form-control" required id="inputpassword1" placeholder="Password">
      </div>
      
      <input type="submit" class="btn btn-success mt-2 " name="SubmitButton" value="Login">
      <a href="signup.php" class="text-success text-decoration-none ms-2">Signup</a>

    </form>
    
  </div>
</div>
        </div>
    </div>
</div>

</body>
</html>