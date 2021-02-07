
            <div class="d-flex justify-content-between py-5">
                <h2>Product List</h2> 

                <a href="<?php echo base_url('admin/product/add');?>" class="btn btn-success">Add product</a>
            </div>

  
            
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
                    
                    
                    <?php $i = 1; foreach($products as $row) {?>
                        <tr>
                            <th><?php echo $i;?></th>
                            <th>
                                <img style="width:100px" src="<?php echo base_url($row["image"]);?>" alt="">
                            </th>
                            <td><?php echo $row["title"];?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/product/edit/'.$row["product_id"]);?>">Edit</a>
                                <a class="btn btn-danger btn-sm del-btn" href="<?php echo base_url('admin/product/delete/'.$row["product_id"]);?>">Delete</a>
                            </td>
                        </tr>
                    <?php $i++; }?>

                </tbody>
        </table>
