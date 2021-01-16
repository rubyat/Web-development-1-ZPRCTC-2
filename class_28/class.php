<?php include'inc/header.php';?>

            <div class="d-flex justify-content-between py-5">
                <h2>Class List</h2> 
                <a href="add_class.php" class="btn btn-success">Add Class</a>
            </div>

            <?php

                    include"inc/con.php";
                    $sql = "SELECT * FROM class";
                    $result = $conn->query($sql);
                    
                    $conn->close();
                ?>
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php if ($result->num_rows > 0) { ?>
                        <?php while($row = $result->fetch_assoc()) {?>
                            <tr>
                                <th scope="row"><?php echo $row["class_id"];?></th>
                                <td><?php echo $row["class_name"];?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="update_class.php?class_id=<?php echo $row["class_id"];?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete_class.php?class_id=<?php echo $row["class_id"];?>">Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                    <?php }?>

                </tbody>
        </table>

<?php include'inc/footer.php';?> 