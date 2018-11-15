
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
	.col-lg-4{
				background-color: #111;

	}



</style>




</head>
<body style="background-color:#ECEFF1 ">
	<div class="container target">
	 <div class="cardg">

        <?php require("views/en/users/profileinfo.php"); ?>   

  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   

        <div class="col-sm-9" style="" contenteditable="false">
            <!--<div class="panel panel-default">
                <div class="panel-heading">Starfox221's Bio</div>
                <div class="panel-body"> A long description about me.

      </div>
            </div> -->

        <div class="row"  >
            <div class="col-md-12" style="padding: 0px;">
                <div class="list-group-item text-center"  style="background-color: #004D40;border-radius: 5px 5px 0px 0px;">
                     <h4><strong style="color: #eef;">Measurement</strong></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pull-left" style="background-color: #;padding: 0px;">
                <h4 class="list-group-item text-left">Blood Pressure</h4>
            </div>
            <div class="col-md-6 "  style="padding: 5px;">
                <div class="dropdown show">
                  <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Option
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/profile">Chart View</a>
                    <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/wtinput">Add Another Measurement</a>
                  </div>
                </div>
            </div>
        </div> 
        <div class="row" style="padding: 0px;">
          <div class="col-lg-12" style="padding: 0px;">
        
                    <div class=" table-responsive" style="padding: 0px;background-color: #fff;">
                                    <table class="table table-bordered table-striped" class="small">
                                        <thead class="thead-dark small">
                                            <th> Date  </th>
                                            <th>Time</th>
                                            <th>Systolic</th>
                                            <th>Diastolic</th>
                                            <th>Pulse</th>
                                            <th>Irregular Heartbeat</th>
                                            <th>Notes</th>
                                            <th>Action</th>
                                        
                                        </thead>
                                        <tbody >
                                       <?php foreach($_SESSION['bp_measurement'] as $bpre) : ?>
                                            <tr class="small">
                                                <td><?php  echo $bpre['dom']; ?></td>
                                                <td><?php echo $bpre['tom']; ?></td>
                                                <td><?php echo $bpre["systolic"] ?> mmHG</td>
                                                <td><?php echo $bpre["diastolic"] ." " ?>mmHG</td>
                                                <td><?php echo $bpre["pulse"] ?> BPM</td>
                                                <td><?php echo $bpre["irregular_heartbeat"] ?></td>
                                                <td><?php echo $bpre["note"] ?></td>
                                                <td> 
        <form class="pull-right" method="POST" action="">
            <input type="hidden" name="bpdelete_id" value="<?php echo $bpre['bpid']; ?>">
           <i class="material-icons text-white"> <input classs="btn-floating waves-effect waves-light btn red tooltipped" class="btn btn-danger" name="bpdelete" type="submit" value="delete" /></i>
        </form>
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>   
                       
                                        </tbody>
                                    </table>
                                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>