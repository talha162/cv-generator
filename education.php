<?php
 if(isset($_POST['SubmitButton'])){ // Check if form was submitted
  include 'config.php';
       
        $education=array($_POST['sname'],$_POST['ecity'],$_POST['estate'],$_POST['edegree'],$_POST['fstudy'],$_POST['sdate'],$_POST['edate']);
      
        $sql = "INSERT INTO education
        VALUES (NULL,'$education[0]',
         '$education[1]',
          '$education[2]',
          '$education[3]',
          '$education[4]',
          '$education[5]',
          '$education[6]')";
        
        if ($conn->query($sql) === TRUE) {
    header('Location: skills.php');
          
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
    <title>Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
    
<?php
  include 'navbar.php'
  ?>
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-success fw-bolder">Education</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="row mt-3">
    <div class="col">
      <input  required type="text" class="form-control" placeholder="School Name"  name="sname">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="City"  name="ecity">
    </div>
  </div>
  <div class="row mt-3">
    
  <div class="col">
      <input  required type="text" class="form-control" placeholder="State" name="estate">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Degree"  name="edegree">
    </div>
    <div class="col">
      <input  required type="text" class="form-control" placeholder="Field Of Study"  name="fstudy">
    </div>
  </div>
  <div class="row mt-3">
  
    <div class="col">
    <label for="example">Start Date</label>
      <input  required type="date" class="form-control" id="example "placeholder=""  name="sdate">
    </div>
    <div class="col">
    <label for="example1">End Date</label>
      <input  required type="date" class="form-control" id="example1 "placeholder=""  name="edate">
    </div>
    
  </div>
  <div class="row mt-3 d-flex justify-content-center">
    <div class="col-3">
  <a href="experience.php" class="px-4 text-decoration-none  mt-5 text-success">Add more education</a>
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