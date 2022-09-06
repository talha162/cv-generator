
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<style>
        textarea {
            resize: none;
          }
          #btn1:hover{
              color:white;
          }
        </style>
</head>
<body>
    
<?php
  include 'navbar.php'
  ?>
  <?php
 if(isset($_POST['SubmitButton']) || isset($_POST['SubmitButton1'])){ // Check if form was submitted
  include 'config.php';
       
        $projecttitle=$_POST['projecttitle'];
        $projectdetail=$_POST['projectdetail'];
        $userid=$_SESSION['uid'];
        $sql = "INSERT INTO project
        VALUES (NULL,'$projecttitle','$projectdetail','$userid')";
        
        if ($conn->query($sql) === TRUE) {
          // echo "<script>alert('r')</script>";
          if(isset($_POST['SubmitButton'])){
            header('Location: selecttemplate.php');
          }
          else if(isset($_POST['SubmitButton1'])){
            header('Location: projects.php');
          }
          
        } else {
          echo "<script>alert('Error:  $sql  <br>  $conn->error')</script>";
        }
        
        $conn->close();
      }
?>
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-success fw-bolder">Project</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="row mt-2">
    <div class="col">
      <div class="mb-3">
        <input type="text" class="form-control" name="projecttitle"  placeholder="Project Title">
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <div class="mb-3">
        <textarea class="form-control" name="projectdetail"  rows="4" placeholder="projectdetail"></textarea>
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-3">
    <button type="submit" name="SubmitButton1" id="btn1"class="px-4 text-decoration-none btn btn-link btn-outline-light text-success mt-5" style="">Add more Projects</button>
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