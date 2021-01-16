<?php

    if($_POST){

        include"inc/con.php";
    
        $sql = "INSERT INTO class ( class_name ) VALUES ('". $_POST['class_name'] ."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header('Location: class.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }   

        exit();


        $conn->close();





    }

?>
<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Add class</h2> 
            <a href="class.php" class="btn btn-success">Class List</a>
        </div>



        <form method="post" action="">
            <div class="row mb-3">
                <label for="class_name" class="col-sm-2 col-form-label">Class Name</label>
                <div class="col-sm-10">
                    <input type="text" name="class_name" class="form-control" id="class_name">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
            
            

<?php include'inc/footer.php';?> 