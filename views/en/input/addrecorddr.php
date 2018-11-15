        
    <div class="container target">

        <?php require("views/en/doctors/docprofile.php"); ?>   
  <br>
    <div class="row">
      <?php Messages::display(); ?>
                <div class="col-lg-3">
            <ul>
                <li class="list-group-item text-left">
                    <p>Paient's Name: <?php echo $_SESSION['patient_data']['first_name']; echo" ";echo $_SESSION['patient_data']['last_name']; ?></p>
                </li>
                <li class="list-group-item text-left">
                    <p>Phone No: +880<?php echo $_SESSION['user_data']['phone_no']; ?></p>
                </li>
                <li class="list-group-item text-left">
                    <p>Gender: <?php echo $_SESSION['user_data']['sex']; ?></p>
                </li>
                <li class="list-group-item text-left">
                    <p>DOB: <?php echo $_SESSION['user_data']['dob']; ?></p>
                </li>
            </ul>
                
          <ul>
            <li class="list-group-item">
              <a href="<?php echo ROOT_URL; ?>doctors/patientrecords">Patient's Medical Records</a>
            </li>
        <!--       <li class="list-group-item">
              <a href="#">Appointments</a>
            </li>
            <li class="list-group-item ">
              <a href="#">Basic info</a>
         </li> -->

          </ul>
        </div>
                <div class="col-sm-9">
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
                            
                            <a class="btn btn-outline-danger" href="<?php echo ROOT_URL; ?>doctors/patientrecords">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</div>
s