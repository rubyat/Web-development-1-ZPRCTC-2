<?php

    if($_POST){

        include"inc/con.php";
        include"inc/function.php";

        $image = upload_image($_FILES["image"]);
        $icon = upload_image($_FILES["icon"]);

    
        //$sql = "INSERT INTO product ( title, details, image , icon ) VALUES ('". $_POST['title'] ."', '". $_POST['details'] ."', '". $image ."', '". $icon ."')";
        $sql = 'INSERT INTO product ( title, details, image , icon ) VALUES ("'. $_POST['title'] .'", "'. $_POST['details'] .'", "'. $image .'", "'. $icon .'")';

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header('Location: product.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }   

        exit();


        $conn->close();





    }

?>
<?php include'inc/header.php';?>

<?php 

    if($_SESSION['user_id'] != 1){
        header('Location: index.php');
    }
?>



        <div class="d-flex justify-content-between py-5">
            <h2>Add product</h2> 
            <a href="product.php" class="btn btn-success">product List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="details" rows="5"></textarea>
                </div>
            </div>
             <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>
             <div class="row mb-3">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input type="file" name="icon" class="form-control" id="icon">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
            
            

<?php include'inc/footer.php';?> 