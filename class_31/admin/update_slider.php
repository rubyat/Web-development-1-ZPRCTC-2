<?php 


    $slider_id = $_GET['slider_id'];
    include"inc/con.php";


    if($_POST){


        if(!empty($_FILES['image']['name'])){

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

        }else{
            $image = $_POST['old_image'];
        }

        



        $sql = "UPDATE slider SET title='". $_POST['title'] ."',  image='". $image ."'  WHERE slider_id = $slider_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: index.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM slider WHERE slider_id = $slider_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $slider = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update Slider</h2> 
            <a href="class.php" class="btn btn-success">class List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input value="<?php echo $slider['title'];?>" type="text" name="title" class="form-control" id="title">
                </div>
            </div>

           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    
                    <img style="width:100px" src="../uploads/<?php echo $slider["image"];?>" alt="">
                    
                </div>
            </div>
           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>

            <input type="hidden" name="old_image" value="<?php echo $slider["image"];?>">


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 