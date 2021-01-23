<?php 


    $product_id = $_GET['product_id'];
    include"inc/con.php";
    include"inc/function.php";


    if($_POST){


        if(!empty($_FILES['image']['name'])){
            $image = upload_image($_FILES["image"]);   
        }else{
            $image = $_POST['old_image'];
        }


        if(!empty($_FILES['icon']['name'])){
            $icon = upload_image($_FILES["icon"]); 
        }else{
            $icon = $_POST['old_icon'];
        }

        



        //$sql = "UPDATE product SET title='". $_POST['title'] ."',  image='". $image ."'  WHERE product_id = $product_id";
        $sql = 'UPDATE product SET title="'. $_POST['title'] .'", details="'. $_POST['details'] .'",  image="'. $image .'",  icon="'. $icon .'"  WHERE product_id = '.$product_id;

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: product.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $product = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update product</h2> 
            <a href="product.php" class="btn btn-success">Prouct List</a>
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input value="<?php echo $product['title'];?>" type="text" name="title" class="form-control" id="title">
                </div>
            </div>

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="details" rows="5"><?php echo $product['details'];?></textarea>
                </div>
            </div>

           <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    
                    <img style="width:100px" src="../uploads/<?php echo $product["image"];?>" alt="">
                    
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
                    
                    <img style="width:50px" src="../uploads/<?php echo $product["icon"];?>" alt="">
                    
                </div>
            </div>
           <div class="row mb-3">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input type="file" name="icon" class="form-control" id="icon">
                </div>
            </div>

            <input type="hidden" name="old_image" value="<?php echo $product["image"];?>">
            <input type="hidden" name="old_icon" value="<?php echo $product["icon"];?>">


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 