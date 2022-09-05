<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";

    ?>
    <div class="container-fluid bg-success vh-100">
        <div class="row">
            <div class="col-12">
            <?php
    include 'navbar.php';
    ?>
    <div class="container d-flex justify-content-center py-5 my-5">
        <div class="row py-5">
            <div class="col">
           <a href="template1.php" class=" text-decoration-none btn btn-outline-light mt-5 bg-success">Template 1</a>

            <div class="col">
           <a href="template2.php" class=" text-decoration-none btn btn-outline-light mt-5 bg-success">Template 2</a>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
   
</body>
</html>