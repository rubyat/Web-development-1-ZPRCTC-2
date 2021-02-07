<div class="d-flex justify-content-between py-5">
    <h2>Update User</h2> 
</div>


<?php if($succes_message){?>
    <div class="alert alert-success" role="alert"><?php echo $succes_message;?></div>
<?php }?>


<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input value="<?php echo $user['user_name'];?>" type="text" name="user_name" class="form-control" id="user_name">
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input required value="" type="password" name="password" class="form-control" id="password">
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
</form>