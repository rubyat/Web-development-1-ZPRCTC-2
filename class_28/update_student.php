<?php 


    $student_id = $_GET['student_id'];
    include"inc/con.php";


    if($_POST){

        $sql = "UPDATE student SET name='". $_POST['name'] ."', mobile='". $_POST['mobile'] ."', address='". $_POST['address'] ."', class='". $_POST['class'] ."', roll='". $_POST['roll'] ."'  WHERE student_id = $student_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: index.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{

        $sql = "SELECT * FROM student WHERE student_id = $student_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $student = $result->fetch_assoc();
    }

    

    


?>


<?php include'inc/header.php';?>



        <div class="d-flex justify-content-between py-5">
            <h2>Update Student</h2> 
            <a href="index.php" class="btn btn-success">Student List</a>
        </div>



        <form method="post" action="">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input value="<?php echo $student['name'];?>" type="text" name="name" class="form-control" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="roll" class="col-sm-2 col-form-label">Roll</label>
                <div class="col-sm-10">
                    <input value="<?php echo $student['roll'];?>" type="text" name="roll" class="form-control" id="roll">
                </div>
            </div>

            <div class="row mb-3">
                <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input value="<?php echo $student['mobile'];?>" type="text" name="mobile" class="form-control" id="mobile">
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea name="address" class="form-control" id="address" rows="4"><?php echo $student['address'];?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="class" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <input value="<?php echo $student['class'];?>" type="text" name="class" class="form-control" id="class">
                </div>
            </div>


  
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 