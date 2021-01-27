<div class="d-flex justify-content-between py-5">
    <h2>Add batch</h2> 
    <a href="<?php echo base_url('batch');?>" class="btn btn-success">Batch List</a>
</div>

<form method="post" action="<?php echo base_url('batch/operation');?>">
    <div class="row mb-3">
        <label for="batch_name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="batch_name" class="form-control" id="batch_name">
        </div>
    </div>




    
    <button type="submit" class="btn btn-primary">Save</button>
</form>