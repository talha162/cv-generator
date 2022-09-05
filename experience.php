<?php
 if(isset($_POST['SubmitButton'])){ // Check if form was submitted
  include 'config.php';
       
        $experience=array($_POST['cname'],$_POST['jtitle'],$_POST['ecity'],$_POST['detail'],$_POST['sdate'],$_POST['edate']);
      
        $sql = "INSERT INTO experience
        VALUES (NULL,'$experience[0]',
         '$experience[1]',
          '$experience[2]',
          '$experience[3]',
          '$experience[4]',
          '$experience[5]')";
        
        if ($conn->query($sql) === TRUE) {
    header('Location: education.php');
          
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
    <title>Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
    
<?php
  include 'navbar.php'
  ?>
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-success fw-bolder">Experience</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Company Name"  name="cname">
    </div>
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Job Title"  name="jtitle">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="City"  name="ecity">
    </div>
  </div>
  <div class="row mt-2">
    
  <div class="col">
      <input  required  type="text" class="form-control" placeholder="Detail" name="detail">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
    <label for="example">Start Date</label>
      <input  required  type="date" class="form-control" id="example "placeholder=""  name="sdate">
    </div>
    <div class="col">
    <label for="example1">End Date</label>
      <input  required  type="date" class="form-control" id="example1 "placeholder=""  name="edate">
    </div>
    
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-3">
  <a href="experience.php" class="px-4 text-decoration-none  mt-5 text-success">Add more experience</a>
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