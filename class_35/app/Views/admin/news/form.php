<div class="d-flex justify-content-between py-5">
    <h2>Add news</h2> 
    <a href="index.php" class="btn btn-success">news List</a>
</div>



<form method="post" action="<?php echo base_url('admin/news/operation/'.$news_id);?>" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input value="<?= ($news)?$news['title']:''; ?>" type="text" name="title" class="form-control" id="title">
        </div>
    </div>
    <div class="row mb-3">
        <label for="details" class="col-sm-2 col-form-label">Details</label>
        <div class="col-sm-10">
            <textarea name="details" id="editor" rows="10" class="form-control"><?= ($news)?$news['details']:''; ?></textarea>
        </div>
    </div>

    <?php if($news){?>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            
            <img style="width:100px" src="<?php echo base_url($news["image"]);?>" alt="">
            
        </div>
    </div>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            
            <img style="width:100px" src="<?php echo base_url($news["side_image"]);?>" alt="">
            
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
        <label for="side_image" class="col-sm-2 col-form-label">Side image</label>
        <div class="col-sm-10">
            <input type="file" name="side_image" class="form-control" id="side_image">
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Save</button>
</form>
            
            