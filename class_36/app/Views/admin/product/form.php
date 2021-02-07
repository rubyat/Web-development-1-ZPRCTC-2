<div class="d-flex justify-content-between py-5">
    <h2>Add product</h2> 
    <a href="index.php" class="btn btn-success">product List</a>
</div>



<form method="post" action="<?php echo base_url('admin/product/operation/'.$product_id);?>" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input value="<?= ($product)?$product['title']:''; ?>" type="text" name="title" class="form-control" id="title">
        </div>
    </div>
    <div class="row mb-3">
        <label for="details" class="col-sm-2 col-form-label">Details</label>
        <div class="col-sm-10">
            <textarea name="details" id="editor" rows="10" class="form-control"><?= ($product)?$product['details']:''; ?></textarea>
        </div>
    </div>

    <?php if($product){?>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            
            <img style="width:100px" src="<?php echo base_url($product["image"]);?>" alt="">
            
        </div>
    </div>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            
            <img style="width:100px" src="<?php echo base_url($product["icon"]);?>" alt="">
            
        </div>
    </div>
    <?php }?>

    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control" id="image">
        </div>
    </div>

    <div class="row mb-3">
        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
        <div class="col-sm-10">
            <input type="file" name="icon" class="form-control" id="icon">
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Save</button>
</form>
            
            