
            <div class="d-flex justify-content-between py-5">
                <h2>news List</h2> 

                <a href="<?php echo base_url('admin/news/add');?>" class="btn btn-success">Add news</a>
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
                    
                    
                    <?php $i = 1; foreach($newss as $row) {?>
                        <tr>
                            <th><?php echo $i;?></th>
                            <th>
                                <img style="width:100px" src="<?php echo base_url($row["image"]);?>" alt="">
                            </th>
                            <td><?php echo $row["title"];?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/news/edit/'.$row["news_id"]);?>">Edit</a>
                                <a class="btn btn-danger btn-sm del-btn" href="<?php echo base_url('admin/news/delete/'.$row["news_id"]);?>">Delete</a>
                            </td>
                        </tr>
                    <?php $i++; }?>

                </tbody>
        </table>
