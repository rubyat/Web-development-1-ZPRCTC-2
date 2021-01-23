<?php session_start();?>

<?php 

    if(isset($_SESSION['is_login']) && $_SESSION['is_login']){

    }else{
        header('Location: login.php');
        exit();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin :: Onmimeat</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Admin :: Onmimeat :: <?php echo $_SESSION['user_name'];?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Slider</a>
                </li>

                <?php if($_SESSION['user_id'] == 1){?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                </li>
                <?php }?>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="page.php">Pages</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="edit_profile.php" class="btn btn-outline-success">Profile</a>
                <a href="logout.php" class="btn btn-outline-danger">Logout</a>
            </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            