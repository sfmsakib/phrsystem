        
    <div class="container target">

        <?php require("views/en/users/profileinfo.php"); ?>   
  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   


        <div class="col-md-9">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Upload Profile Picture</label>
                        <input type="file" name="profile_pic" class="form-control" />
                        <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>

                    </div>
                    <!--<div class="form-group">
                        <label>File Add</label>
                        <input type="file" name="document" class="form-control">
                        <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
                    </div>-->
                    
                    <input class="btn btn-primary" name="submit" type="submit" value="Save" />
                    
                    <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>users/profile">Cancel</a>
                </form>

        </div>
</div>
</div>
s