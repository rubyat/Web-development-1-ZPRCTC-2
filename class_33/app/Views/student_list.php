<div class="d-flex justify-content-between py-5">
    <h2> 
    
        <?php 
        
            if(isset($search)){
                echo "Search result for ".$search." <b>(". count($students) .")</b>";
            }else{
                echo 'Student List';
            }
        
        ?>
    
    </h2> 
    <a href="<?php echo base_url('student/add');?>" class="btn btn-success">Add Student</a>
</div>


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
        
        <?php foreach($students as $key => $row){?>
         <tr>
            <th scope="row"><?php echo $key + 1;?></th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['roll'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['address'];?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?php echo base_url('student/edit/'.$row['student_id']);?>">Edit</a>
                <a class="btn btn-danger btn-sm del-btn" href="<?php echo base_url('student/delete/'.$row['student_id']);?>">Delete</a>
            </td>
        </tr>
        <?php }?>
                                        
                                
    </tbody>
</table>