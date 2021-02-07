<div class="d-flex justify-content-between py-5">
    <h2>Add Slider</h2> 
    <a href="index.php" class="btn btn-success">Slider List</a>
</div>



<form method="post" action="<?php echo base_url('admin/slider/operation/'.$slider_id);?>" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input value="<?= ($slider)?$slider['title']:''; ?>" type="text" name="title" class="form-control" id="title">
        </div>
    </div>

    <?php if($slider){?>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            
            <img style="width:100px" src="<?php echo base_url($slider["image"]);?>" alt="">
            
        </div>
    </div>
    <?php }?>

    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control" id="image">
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Save</button>
</form>
            
            