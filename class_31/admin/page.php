<?php include'inc/header.php';?>

            <div class="d-flex justify-content-between py-5">
                <h2>page List</h2> 
            </div>

            <?php

                    include"inc/con.php";
                    $sql = "SELECT * FROM page";
                    $result = $conn->query($sql);
                    
                    $conn->close();
                ?>
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col" style="width:50px">#</th>
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
                                <td><?php echo $row["title"];?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="update_page.php?page_id=<?php echo $row["page_id"];?>">Edit</a>
                                </td>
                            </tr>
                        <?php $i++; }?>
                    <?php }?>

                </tbody>
        </table>

<?php include'inc/footer.php';?> 