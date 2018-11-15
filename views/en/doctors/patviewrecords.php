<!DOCTYPE html>
<html>
<head>
  <title></title>

<style type="text/css">
  .bck{
    background: #bbccc0;
  }
</style>
</head>
<body style="background-color:#ECEFF1 ">
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
        <div class="col-md-9">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">  
                    <i class="material-icons md-24" style="font-size:23px;color:red;">        
                    <a  href="<?php echo ROOT_URL;?>doctors/patientrecords" class="bgtn bftn-warning" role="fbutton">backspace<i style="font-size:25px;color:red;">BACK</i></a>
                    </i>
  <br><br>
                      <a href="<?php echo ROOT_PATH . $_SESSION['pat_doc_result_single']['doc_loc']; ?>"> 
                      <img class="card-img-top" src="<?php echo ROOT_PATH . $_SESSION['pat_doc_result_single']['doc_loc']; ?>" alt=""></a>
                  <div class="caption">
                    <h3><?php echo  $_SESSION['pat_doc_result_single']['disease_title']; ?></h3>
                    <p><?php echo  $_SESSION['pat_doc_result_single']['doc_type']; ?></p>
                    <a href="<?php echo ROOT_PATH.$_SESSION['pat_doc_result_single']['doc_loc'];?>" class="btn btn-primary" role="button">View</a>
        <form class="pull-right" method="POST" action="">
            <input type="hidden" name="bpdelete_id" value="<?php echo $bpre['bpid']; ?>">
           <i class="material-icons text-white"> <input classs="btn-floating waves-effect waves-light btn red tooltipped" class="btn btn-danger" name="bpdelete" type="submit" value="edit" /></i>
        </form>     
                  </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>
</body>
</html>      
