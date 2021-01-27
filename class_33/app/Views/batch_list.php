<div class="d-flex justify-content-between py-5">
    <h2>Batch List</h2> 
    <a href="<?php echo base_url('batch/add');?>" class="btn btn-success">Add batch</a>
</div>


<table class="table table-striped table-hover table-bordered">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        
        <?php foreach($batchs as $key => $row){?>
         <tr>
            <th scope="row"><?php echo $key + 1;?></th>
            <td><?php echo $row['batch_name'];?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?php echo base_url('batch/edit/'.$row['batch_id']);?>">Edit</a>
                <a class="btn btn-danger btn-sm del-btn" href="<?php echo base_url('batch/delete/'.$row['batch_id']);?>">Delete</a>
            </td>
        </tr>
        <?php }?>
                                        
                                
    </tbody>
</table>