<?php $session = session();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="<?php echo base_url('control/sweetalert/sweetalert2.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('control/sweetalert/sweetalert2.min.css');?>">

    <title>Admin :: Onmimeat:: <?php echo $session->user_name;?></title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('admin/slider');?>">Admin :: Onmimeat :: <?php echo $session->user_name;?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/slider');?>">Slider</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/product');?>">Product</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/news');?>">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/page');?>">Pages</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="<?php echo base_url('admin/profile');?>" class="btn btn-outline-success">Profile</a>
                <a href="<?php echo base_url('admin/profile/logout');?>" class="btn btn-outline-danger">Logout</a>
            </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php echo $main_content;;?>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script src="<?php echo base_url('control/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('control/tinymce/tinymce.min.js');?>"></script>

    <script src="<?php echo base_url('control/js/main.js');?>"></script>

  </body>
</html>


            