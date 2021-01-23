<?php include'inc/header.php';?>
<?php 


    
    include"inc/con.php";

    $user_id = $_SESSION['user_id'];

    if($_POST){


       
        $sql = 'UPDATE user SET user_name="'. $_POST['user_name'] .'", password="'. md5($_POST['password']) .'" WHERE user_id = '.$user_id;

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";

        } else {
            echo "Error updating record: " . $conn->error;
        }

        exit();

    }else{


        $sql = "SELECT * FROM user WHERE user_id = $user_id";
        $result = $conn->query($sql);
        
        $conn->close();

        $user = $result->fetch_assoc();
    }

    

    


?>






        <div class="d-flex justify-content-between py-5">
            <h2>Update User</h2> 
        </div>



        <form method="post" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input value="<?php echo $user['user_name'];?>" type="text" name="user_name" class="form-control" id="user_name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input required value="" type="password" name="password" class="form-control" id="password">
                </div>
            </div>

            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            
            

<?php include'inc/footer.php';?> 