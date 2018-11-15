        
    <div class="container target">

<div class="row" style="margin-top: 10px; padding-top: 10px; border-radius: 5px; background: #ECEFF1;">
	        <div class="col-sm-4">
                <ul><p>Patient Name</p>
                    <li class="list-group-item text-center">
                        <p><?php echo $_SESSION['patient_data']['first_name']; echo" ";echo $_SESSION['patient_data']['last_name']; ?></p>
                    </li>
            	</ul>
            </div>
	        <div class="col-sm-4">
	        	<ul><p>Patient ID</p>
                    <li class="list-group-item text-center">
                        <p><?php echo $_SESSION['patient_data']['user_id']; ?></p>
                    </li>
                </ul>
            </div>
	        <div class="col-sm-4">
	        	<ul><p>Upload For Another Patient</p>
                    <li class="list-group-item text-center">
                        <a   href="<?php echo ROOT_URL; ?>diagnostic/profile"><button class="btn btn-outline-danger" >Change Patient</button> </a>
                    </li>
                </ul>
            </div>
</div>  
  
    <div class="row" >  
               <div class="col-md-7 offset-sm-3">
         <div class="container" style="background-color: #ECEFF1;padding: 40px; border-radius: 5px;margin-top: 10px;">
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
                            
                            <a class="btn btn-outline-danger" href="<?php echo ROOT_URL; ?>diagnostic/profile">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>
