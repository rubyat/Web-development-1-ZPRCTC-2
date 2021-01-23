<?php 


    $news_id = $_GET['news_id'];
    include"inc/con.php";
    include"inc/function.php";


    if($_POST){


        if(!empty($_FILES['image']['name'])){
            $image = upload_image($_FILES["image"]);   
        }else{
            $image = $_POST['old_image'];
        }


        if(!empty($_FILES['side_image']['name'])){
            $side_image = upload_image($_FILES["side_image"]); 
        }else{
            $side_image = $_POST['old_side_image'];
        }

        



        //$sql = "UPDATE news SET title='". $_POST['title'] ."',  image='". $image ."'  WHERE news_id = $news_id";
        $sql = 'UPDATE news SET title="'. $_POST['title'] .'", details="'. $_POST['details'] .'",  image="'. $image .'",  side_image="'. $side_image .'"  WHERE news_id = '.$news_id;

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: news.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM news WHERE news_id = $news_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $news = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update news</h2> 
            <a href="news.php" class="btn btn-success">Prouct List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input value="<?php echo $news['title'];?>" type="text" name="title" class="form-control" id="title">
                </div>
            </div>

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="details" rows="5"><?php echo $news['details'];?></textarea>
                </div>
            </div>

           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    
                    <img style="width:100px" src="../uploads/<?php echo $news["image"];?>" alt="">
                    
                </div>
            </div>
           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    
                    <img style="width:50px" src="../uploads/<?php echo $news["side_image"];?>" alt="">
                    
                </div>
            </div>
           <div class="row mb-3">
                <label for="side_image" class="col-sm-2 col-form-label">side_image</label>
                <div class="col-sm-10">
                    <input type="file" name="side_image" class="form-control" id="side_image">
                </div>
            </div>

            <input type="hidden" name="old_image" value="<?php echo $news["image"];?>">
            <input type="hidden" name="old_side_image" value="<?php echo $news["side_image"];?>">


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 