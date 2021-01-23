<?php

    if($_POST){

        include"inc/con.php";
        include"inc/function.php";

        $image = upload_image($_FILES["image"]);
        $side_image = upload_image($_FILES["side_image"]);

    
        //$sql = "INSERT INTO news ( title, details, image , side_image ) VALUES ('". $_POST['title'] ."', '". $_POST['details'] ."', '". $image ."', '". $side_image ."')";
        $sql = 'INSERT INTO news ( title, details, image , side_image ) VALUES ("'. $_POST['title'] .'", "'. $_POST['details'] .'", "'. $image .'", "'. $side_image .'")';

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header('Location: news.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }   

        exit();


        $conn->close();





    }

?>
<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Add news</h2> 
            <a href="news.php" class="btn btn-success">news List</a>
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
                <label for="side_image" class="col-sm-2 col-form-label">side_image</label>
                <div class="col-sm-10">
                    <input type="file" name="side_image" class="form-control" id="side_image">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
            
            

<?php include'inc/footer.php';?> 