
            <div class="d-flex justify-content-between py-5">
                <h2>Page List</h2> 
            </div>

  
            
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col" style="width:100px;"></th>
                    </tr>
                </thead>

                <tbody>
                    
                    
                    <?php $i = 1; foreach($pages as $row) {?>
                        <tr>
                            <th><?php echo $i;?></th>
                            <td><?php echo $row["title"];?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/page/edit/'.$row["page_id"]);?>">Edit</a>
                            </td>
                        </tr>
                    <?php $i++; }?>

                </tbody>
        </table>
