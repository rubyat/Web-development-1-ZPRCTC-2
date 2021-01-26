<div class="d-flex justify-content-between py-5">
    <h2>Student List</h2> 
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
        
        <?php foreach($students as $row){?>
         <tr>
            <th scope="row">1</th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['roll'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['address'];?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?php echo base_url('student/edit');?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="delete_student.php?student_id=1">Delete</a>
            </td>
        </tr>
        <?php }?>
                                        
                                
    </tbody>
</table>