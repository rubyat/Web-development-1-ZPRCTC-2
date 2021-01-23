<?php include'inc/header.php';?>

            <div class="d-flex justify-content-between py-5">
                <h2>Slider List</h2> 
                <a href="add_slider.php" class="btn btn-success">Add slider</a>
            </div>

            <?php

                    include"inc/con.php";
                    $sql = "SELECT * FROM slider";
                    $result = $conn->query($sql);
                    
                    $conn->close();
                ?>
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:100px">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php $i = 1;?>
                    <?php if ($result->num_rows > 0) { ?>
                        <?php while($row = $result->fetch_assoc()) {?>
                            <tr>
                                <th><?php echo $i;?></th>
                                <th>

                                    <img style="width:100px" src="../uploads/<?php echo $row["image"];?>" alt="">
                                
                                </th>
                                <td><?php echo $row["title"];?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="update_slider.php?slider_id=<?php echo $row["slider_id"];?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete_slider.php?slider_id=<?php echo $row["slider_id"];?>">Delete</a>
                                </td>
                            </tr>
                        <?php $i++; }?>
                    <?php }?>

                </tbody>
        </table>

<?php include'inc/footer.php';?> 