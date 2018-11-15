<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<div class="container " style="padding-top: 2%; background-color: white;">
  <div class="row">
    <div class="col-12">
      <div class="well well-small clearfix">
        <div class="row">
      <div class="col-sm-2"><a href="<?php echo ROOT_URL; ?>input/updatepic/2" class="pull-right" ><img height="120" width="120" title="Update Profile Picture" class="img-fluid rounded-circle" alt="Profile Picture" src="<?php echo ROOT_URL_PREV.$_SESSION['user_data']['profile_pic']?>"></a>
            </div>

          <div class="col-lg-4 md-4 sm-4">
             <h4><p>Dr. <?php echo $_SESSION['dr_data']['dr_name']; ?></p></h4> 
            <ul class="list-group" style="padding-bottom: 15px;">
              <li class="list-group-item border-0" style="padding:0px;"><i class="icon-phone"></i> <?php echo $_SESSION['dr_data']['specialization']; ?></li>
              <li class="list-group-item border-0" style="padding:0px;"><i class="icon-envelope"></i> <?php echo $_SESSION['dr_data']['degree'].", ". $_SESSION['dr_data']['institute'] ; ?></li>
              <li class="list-group-item border-0" style="padding:0px;"><i class="icon-globe"></i><?php echo $_SESSION['user_data']['email']; ?></li>
            </ul>
          </div>
          <div class="col-lg-6 md-6 sm-6">
          <ul  class="list-group" style="padding-bottom: 5px;padding-top: 40px;">
               <li class="list-group-item border-0" style="padding:0px;">
                 <span>DoctorID: <strong><?php echo $_SESSION['dr_data']['dr_id']; ?></strong></span>
                 
              </li>
              <li class="list-group-item border-0" style="padding:0px;">
                 <span>BMDC Reg No: <strong><?php echo $_SESSION['dr_data']['bmdc_reg']; ?></strong></span>
              </li>
               <li class="list-group-item border-0" style="padding:0px;">
                 <span>Clinic : <strong><?php echo $_SESSION['dr_data']['clinic_name']; ?></strong></span>
              </li>
          </ul>
            <div><!--/span6-->
            </div><!--/row-->
      </div>
      <!--Body content-->
    </div>
  </div>
</div>
</div>
</div>

<div class="container border border-dark"  style="padding-top: 2%;padding-bottom: 0%;background-color: #ffb;">
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">  
    <div class="form-row">
      <input autocomplete="false" name="hidden" type="text" style="display:none;">
      <div class="col">
        <label class="list-group-item  co l-form-label" style="padding: 15px;"><h3>See Patient's Data</h3></label>
      </div>
      <div class="col">
        <label>Patient's HealthID</label>
      <input type="text" onfocus="this.value=''"  class="form-control" name="pat_id" placeholder="Patient's HealthID"   >
      </div>
      <div class="col">
        <label>Patient's Password</label>
      <input type="text" id="myInput" class="form-control" name="password" placeholder="Patient's password" autocomplete="off" >
      <input type="checkbox" onclick="myFunction()">Hide Password
      </div>
      <div class="col" style="padding-top: 32px;">
      <input type="submit" class="form-control btn btn-success" name="submit" value="Submit">
      </div>
    </div>
  </form>
</div>

</body>
</html>
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>