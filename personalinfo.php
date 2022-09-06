<?php
 if(isset($_POST['SubmitButton'])){ // Check if form was submitted
  include 'config.php';
       
        $personal_info=array($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['city'],$_POST['zipcode'],$_POST['country'],$_POST['email'],$_POST['phoneno']
      ,$_POST['linkedin'],$_POST['github'],$_POST['twiter'],$_POST['website']);
      
        $sql = "INSERT INTO personal_info
        VALUES (NULL,'$personal_info[0]',
         '$personal_info[1]',
          '$personal_info[2]',
          '$personal_info[3]',
          '$personal_info[4]',
          '$personal_info[5]',
          '$personal_info[6]',
          '$personal_info[7]'),
          '$personal_info[8]'),
          '$personal_info[9]'),
          '$personal_info[10]',
          '$personal_info[11]')
          
          ";
        
        if ($conn->query($sql) === TRUE) {
    header('Location: experience.php');
          
        } else {
          echo "<script>alert('Error:  $sql  <br>  $conn->error')</script>";
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
    <title>Personal Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
  <?php
  include 'navbar.php'
  ?>
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-success fw-bolder">Personal Info</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="row mt-2">
    <div class="col">
      <input  required type="text" class="form-control" placeholder="First name" name="fname">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Last name"  name="lname">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Address"  name="address">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required type="text" class="form-control" placeholder="City"  name="city">
    </div>
    <div class="col">
      <input  required type="number" class="form-control" placeholder="Zip Code"  name="zipcode">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Country"  name="country">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Linkedin"  name="linkedin">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Github"  name="github">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Twiter"  name="twiter">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Website"  name="website">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required type="email" class="form-control" placeholder="Email Address"  name="email">
    </div>
    <div class="col">
      <input  required type="number" class="form-control" placeholder="Phone Number"  name="phoneno">
    </div>
    
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-3">
    <button type="submit" name="SubmitButton" class="px-4 text-decoration-none btn btn-outline-light mt-5 bg-success">Save & Next
    </button>    
</div>

  </div>
</form>
    </div>
  </div>
</body>
</html>