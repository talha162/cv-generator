<?php
 if(isset($_POST['SubmitButton'])){ // Check if form was submitted
  include 'config.php';
       
        $skill=array($_POST['s1'],$_POST['s2'],$_POST['s3'],$_POST['s4'],$_POST['s5']);
      // print_r($skill);
        $sql = "INSERT INTO skill
        VALUES (NULL,'$skill[0]',
         '$skill[1]',
          '$skill[2]',
          '$skill[3]',
          '$skill[4]')";
        
        if ($conn->query($sql) === TRUE) {
    header('Location: summary.php');
          
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
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
    
   
<?php
  include 'navbar.php'
  ?>
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-success fw-bolder">Skills</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Skill 1"  name="s1">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Skill 2" name="s2">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Skill 3" name="s3">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Skill 4" name="s4">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input  required  type="text" class="form-control" placeholder="Skill 5" name="s5">
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-3">
    <button type="submit" name="SubmitButton" class="px-4 text-decoration-none btn btn-outline-light mt-5 bg-success">Save & Next
    </div>
  </div>
</form>
    </div>
  </div>

</body>
</html>