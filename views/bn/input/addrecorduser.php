        
    <div class="container target">

        <?php require("views/en/users/profileinfo.php"); ?>   
  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>
                <div class="col-sm-7">
         <div class="container" style="background-color: #ECEFF1;padding: 50px;">   
               <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Add File</label>
                        <div class="col-sm-8">
                            <div class="custom-file">
                            <input class="custom-file-input" type="file" name="doc" class="form-control" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label>File Add</label>
                        <input type="file" name="document" class="form-control">
                        <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
                    </div>-->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="disease_title" class="form-control" />    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Date</label>
                        <div class="col-sm-8">
                        <input type="date" name="app_date" class="form-control" />
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Records For</label>
                        <div class="col-sm-8">
                        <input type="text" name="user_name" class="form-control" />
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Type Of Record</label>
                        <div class="col-sm-8">
                        <select class="form-control" name="doc_type" type="text">
                          <option value="Prescription">Prescription</option>
                          <option value="Report">Report</option>
                          <option value="Invoice">Invoice</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Comment</label>
                        <div class="col-sm-8">
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 offset-sm-4">
                            <input class="btn btn-outline-success" name="submit" type="submit" value="Save" />
                            
                            <a class="btn btn-outline-danger" href="<?php echo ROOT_URL; ?>users/record">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</div>
s