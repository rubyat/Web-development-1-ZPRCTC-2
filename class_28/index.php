<?php include'inc/header.php';?>

            <div class="d-flex justify-content-between py-5">
                <h2>Student List</h2> 
                <a href="add_student.php" class="btn btn-success">Add Student</a>
            </div>

            <?php

                    include"inc/con.php";
                    $sql = "SELECT * FROM student";
                    $result = $conn->query($sql);
                    
                    $conn->close();
                ?>
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Class</th>
                        <th scope="col">Address</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php if ($result->num_rows > 0) { ?>
                        <?php while($row = $result->fetch_assoc()) {?>
                            <tr>
                                <th scope="row"><?php echo $row["student_id"];?></th>
                                <td><?php echo $row["name"];?></td>
                                <td><?php echo $row["roll"];?></td>
                                <td><?php echo $row["mobile"];?></td>
                                <td><?php echo $row["address"];?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="update_student.php?student_id=<?php echo $row["student_id"];?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete_student.php?student_id=<?php echo $row["student_id"];?>">Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                    <?php }?>

                </tbody>
        </table>

<?php include'inc/footer.php';?> 