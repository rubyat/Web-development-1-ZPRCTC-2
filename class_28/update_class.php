<?php 


    $class_id = $_GET['class_id'];
    include"inc/con.php";


    if($_POST){

        $sql = "UPDATE class SET class_name='". $_POST['class_name'] ."'  WHERE class_id = $class_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: class.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM class WHERE class_id = $class_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $class = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update class</h2> 
            <a href="class.php" class="btn btn-success">class List</a>
        </div>



        <form method="post" action="">
            <div class="row mb-3">
                <label for="class_name" class="col-sm-2 col-form-label">Class Name</label>
                <div class="col-sm-10">
                    <input value="<?php echo $class['class_name'];?>" type="text" name="class_name" class="form-control" id="class_name">
                </div>
            </div>

           


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 