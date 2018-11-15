<?php 
$bp=$_SESSION['pat_bp_measurement'];
$wt=$_SESSION['pat_wt_measurement'];
$ht=$_SESSION['pat_ht_measurement'];
//print_r($ht);
$LineChart_bp_data = array();
foreach ($bp as $result) {
    $LineChart_bp_data[]=array($result['dom'],  (int)$result['systolic'], (int)$result['diastolic']);
}
$LineChart_bp = json_encode($LineChart_bp_data);

$LineChart_wt_data = array();
foreach ($wt as $result) {
    $LineChart_wt_data[]=array($result['wtdom'],  (int)$result['weight']);
}
$LineChart_wt = json_encode($LineChart_wt_data);

$LineChart_ht_data = array();
foreach ($ht as $result) {
    $LineChart_ht_data[]=array($result['htdom'],  (int)$result['height']);
}
$LineChart_ht = json_encode($LineChart_ht_data);
?>
<html>
<head>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


	<!--  Material Dashboard CSS    
    <link href="<?php //echo ROOT_PATH; ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
   -->
    <!-- Fonts and icons -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
<style type="text/css">
	.panelsf{
		background-color: #1ea;
	}
 
</style>
</head>
<body style="background-color:#ECEFF1 ">
<div class="container target">
        <?php require("views/en/doctors/docprofile.php"); ?>   <br>
    <div class="row">
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
              <a href="<?php echo ROOT_URL; ?>doctors/patientdata">Patient's Measurements</a>
            </li>
        <!--       <li class="list-group-item">
              <a href="#">Appointments</a>
            </li>
            <li class="list-group-item ">
              <a href="#">Basic info</a>
         </li> -->

          </ul>
        </div>
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="thumbnail">
                <div class="row" >
                    <div class="col-md-12" style="padding-bottom: 3px;">
                        <div class="list-group-item shadow " style="border-radius: 0px;">
                             <a class="nav-link d-flex justify-content-end" href="<?php echo ROOT_URL;?>input/addrecorddr"><h4><strong style="color: blue;">Add Record</strong></h4></a>
                        </div>
                    </div>
                </div>
             <?php foreach($_SESSION['pat_doc_result'] as $docresult) : ?>               
                <div class="list-group  " >
                    <a style="border-radius: 0px;" class="list-group-item list-group-item-action list-group-item-light shadow "  href="<?php echo ROOT_URL;?>doctors/patviewrecords/<?php echo $docresult['docid']; ?>" >    
                        <div class="row" >
                                <div class="col-6 col-md-2">
                                    <?php  echo $docresult['app_date']; ?>
                                </div>
                                <div class="col-6 col-md-6">
                                    <strong><?php  echo $docresult['disease_title']; ?></strong><br>
                                    Records for
                                    <?php  echo $docresult['user_name']; ?>
                                </div>
                                <div class="col-6 col-md-2" >
                                    <div clashs="pull-right">
                                        <?php  echo $docresult['doc_type']; ?>
                                    </div>
                                </div> 
                                <div class="col-6 col-md-2" >
                                    <div class="pull-right">                       
                                        ::
                                    </div>
                                </div> 
                        </div>  
                    </a>       
                </div>         

        <?php endforeach; ?>              

            </div> 
        </div>             
    </div>             
</div>
</body>
</html>      
