
    <div class="container target">
     <div class="cardg">

        <?php require("views/en/users/profileinfo.php"); ?>   

  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   

        <div class="col-sm-9" style="" contenteditable="false">



<div class="row" style="background-color: #ECEFF1;padding: 20px; border-radius: 5px;">
  <div class="col-md-12">
    <h3 class="card-title">Blood pressure</h3>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Systolic (larger number) *</label>
            <div class="col-sm-8">
            <input type="text" name="systolic" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Diastolic (smaller number) *</label>
            <div class="col-sm-8">
            <input type="text" name="diastolic" class="form-control" />    
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Pulse (beats per minute)</label>
            <div class="col-sm-8">
            <input type="text" name="pulse" class="form-control" />
        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Irregular heartbeat detected</label>
            <div class="col-sm-8">
            <input type="text" name="irregular_heartbeat" class="form-control" />
        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Date *</label>
            <div class="col-sm-8">
            <input type="date" name="dom" class="form-control" />
        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Time</label>
            <div class="col-sm-8">
            <input type="text" name="tom" class="form-control" />
        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Note</label>
            <div class="col-sm-8">
            
            <textarea name="note" class="form-control"></textarea>
        </div>
        </div>

        <div class="from-group row">
            <div class="col-sm-8 offset-sm-4">
            <input class="btn btn-outline-primary" name="submit" type="submit" value="Save" />
            
            <a class="btn btn-outline-danger" href="<?php echo ROOT_URL; ?>users/profile">Cancel</a>
        </div>
        </div>
    </form>
    
  </div>
</div>
</div>
</div>
</div>
</div>
