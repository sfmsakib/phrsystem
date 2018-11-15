
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

        <div class="row" style="padding: 0px;" >
            <div class="col-md-12" style="padding: 0px;">
                <div class="list-group-item text-center"  style="background-color: #004D40;border-radius: 5px 5px 0px 0px;">
                     <h4><strong style="color: #eef;">Measurement</strong></h4>
                </div>
            </div>
        </div>
                   
        <div class="row"  >
            <div class="col-md-6 pull-left"  style="background-color: #;padding: 0px;">
                <h4 style="background-color: #;" class="list-group-item text-left">Weight</h4>
            </div>
            <div class="col-md-6 " style="padding: 5px;" >
                <div class="dropdown show">
                  <a class="btn  btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Option
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/profile">Chart View</a>
                    <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/wtinput">Add Another Measurement</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 0px;background-color: #fff;">
                <div class="col-md-12" style="padding: 0px;">
                                <div class=" table-responsive" style="padding: 0px;">
                                    <table class="table table-bordered" class="small">
                                        <thead class="thead-dark small">
                                            <th> Date  </th>
                                            <th>Time</th>
                                            <th>Weight</th>
                                            <th>Notes</th>
                                            <th>Action</th>

                                        </thead>
                                        <tbody>
                                       <?php foreach($_SESSION['wt_measurement'] as $wtr) : ?>               
                                        <tr class="small">
                                                <td><?php echo $wtr['wtdom']; ?></td>
                                                <td><?php echo $wtr['wttom']; ?></td>
                                                <td><?php echo $wtr["weight"] ?> kg</td>
                                                <td><?php echo $wtr["wtnote"] ?></td>
                                                <td>
        <form class="pull-right" method="POST" action="">
            <input type="hidden" name="wtdelete_id" value="<?php echo $wtr['wtid']; ?>">
           <i class="material-icons text-white"> <input classs="btn-floating waves-effect waves-light btn red tooltipped" class="btn btn-danger" name="wtdelete" type="submit" value="delete" /></i>
        </form>                                  </td>

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
</div>
</body>
</html>