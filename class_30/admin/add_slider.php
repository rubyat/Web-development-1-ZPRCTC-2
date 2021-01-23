<?php

    if($_POST){

        include"inc/con.php";



        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            exit();
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = htmlspecialchars( basename( $_FILES["image"]["name"]));
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit();
            }
        }




    
        $sql = "INSERT INTO slider ( title, image ) VALUES ('". $_POST['title'] ."', '". $image ."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header('Location: index.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }   

        exit();


        $conn->close();





    }

?>
<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Add Slider</h2> 
            <a href="index.php" class="btn btn-success">Slider List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title">
                </div>
            </div>
             <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
            
            

<?php include'inc/footer.php';?> 