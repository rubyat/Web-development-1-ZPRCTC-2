<?php

    if($_POST){

        include"inc/con.php";
    
        $sql = "INSERT INTO student (roll, name, mobile, address, class)
        VALUES ('". $_POST['roll'] ."' , '". $_POST['name'] ."', '". $_POST['mobile'] ."','". $_POST['address'] ."','". $_POST['class'] ."')";

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
            <h2>Add Student</h2> 
            <a href="index.php" class="btn btn-success">Student List</a>
        </div>



        <form method="post" action="">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="roll" class="col-sm-2 col-form-label">Roll</label>
                <div class="col-sm-10">
                    <input type="text" name="roll" class="form-control" id="roll">
                </div>
            </div>

            <div class="row mb-3">
                <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input type="text" name="mobile" class="form-control" id="mobile">
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea name="address" class="form-control" id="address" rows="4"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="class" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <input type="text" name="class" class="form-control" id="class">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
            
            

<?php include'inc/footer.php';?> 