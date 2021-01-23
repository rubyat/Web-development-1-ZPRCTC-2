<?php include'inc/header.php';?>
<?php 

    if($_SESSION['user_id'] != 1){
        header('Location: index.php');
    }
?>

            <div class="d-flex justify-content-between py-5">
                <h2>Product List</h2> 
                <a href="add_product.php" class="btn btn-success">Add product</a>
            </div>

            <?php

                    include"inc/con.php";
                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);
                    
                    $conn->close();
                ?>
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col" style="width:50px">#</th>
                        <th scope="col" style="width:100px">Image</th>
                        <th scope="col" style="width:100px">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col" style="width:150px"></th>
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
                                <th>
                                    <img style="width:50px" src="../uploads/<?php echo $row["icon"];?>" alt="">
                                </th>
                                <td><?php echo $row["title"];?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="update_product.php?product_id=<?php echo $row["product_id"];?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete_product.php?product_id=<?php echo $row["product_id"];?>">Delete</a>
                                </td>
                            </tr>
                        <?php $i++; }?>
                    <?php }?>

                </tbody>
        </table>

<?php include'inc/footer.php';?> 