<?php 


    $page_id = $_GET['page_id'];
    include"inc/con.php";
    include"inc/function.php";


    if($_POST){


        if(!empty($_FILES['image']['name'])){
            $image = upload_image($_FILES["image"]);   
        }else{
            $image = $_POST['old_image'];
        }


        //$sql = "UPDATE page SET title='". $_POST['title'] ."',  image='". $image ."'  WHERE page_id = $page_id";
        $sql = 'UPDATE page SET title="'. $_POST['title'] .'", details="'. $_POST['details'] .'",  image="'. $image .'"  WHERE page_id = '.$page_id;

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: page.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM page WHERE page_id = $page_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $page = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update page</h2> 
            <a href="page.php" class="btn btn-success">Prouct List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input value="<?php echo $page['title'];?>" type="text" name="title" class="form-control" id="title">
                </div>
            </div>

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="details" rows="5"><?php echo $page['details'];?></textarea>
                </div>
            </div>

           <?php if($page["image"]){?>
           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    
                    <img style="width:100px" src="../uploads/<?php echo $page["image"];?>" alt="">
                    
                </div>
            </div>
            <?php }?>

           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>


            <input type="hidden" name="old_image" value="<?php echo $page["image"];?>">
            <input type="hidden" name="old_side_image" value="<?php echo $page["side_image"];?>">


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 