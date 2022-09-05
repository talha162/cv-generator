<?php
    include 'navbar.php'
    ?>
<?php
if(!isset($_SESSION["uid"])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body >
    <div class="vh-100 container-fluid bg-success">
        <div class="row">
            <div class="col-12">
          
    <div class="container-fluid d-flex justify-content-center mt-5 p-5">
        <div class="row mt-5 p-5">
            <div class="col-12 ">
           <a href="personalinfo.php" class=" text-decoration-none btn btn-outline-light mt-5 bg-success">Build My resume</a>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
   
    
</body>
</html>