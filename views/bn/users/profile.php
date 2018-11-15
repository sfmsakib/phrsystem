<?php 
$bp=$_SESSION['bp_measurement'];
$wt=$_SESSION['wt_measurement'];
$ht=$_SESSION['ht_measurement'];
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
	.col-lg-4{
				background-color: #111;

	}
</style>
</head>
<body style="background-color:#ECEFF1 ">
<div class="container target">
        <?php require("views/en/users/profileinfo.php"); ?>   <br>
    <div class="row">
        <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   

        <div class="col-sm-9" style="" contenteditable="false">
            <div class="card panel-default target">
                <div class="row"  >
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="list-group-item text-center"  style="background-color: #9E9E9E;border-radius: 5px 5px 0px 0px;">
                             <h4><strong style="color: #81D4FA;">Measurement</strong></h4>
                        </div>
                    </div>
                </div>               
                <div class="row" style="background-color: #E0E0E0 ;padding-top: 10px;padding-bottom: 10px;border-radius: 0px 0px 10px 10px;">
                    <?php if($bp) : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 0px 0px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-6 " ><h4  style="color: #FFCCBC;">Blood Pressure</h4></div>
                                <div class="col-md-6 " >
                                    <div class="dropdown show">
                                      <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/bptable">Table View</a>
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/bpinput">Add Another Measurement</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 0px;margin-right: 0px;border-radius: 0px 0px 6px 6px;" id="chart_bp">                    
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 9px 9px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-12 " ><h4  style="color: #FFCCBC;">Blood Pressure</h4></div>
                                <div class="col-md-12 " >
                                    <div class="list-group-item">
                                      
                                        <a class="dropdown-item text-center" href="<?php echo ROOT_URL; ?>input/bpinput">Add Measurement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($wt) : ?>
                    <div class="col-lg-6" style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 0px 0px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div  class="col-md-6 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-6 " >
                                    <div class="dropdown show">
                                      <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/wttable">Table View</a>
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/wtinput">Add Another Measurement</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 0px;margin-right: 0px;border-radius: 0px 0px 6px 6px;" id="chart_wt">
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 9px 9px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-12 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-12 " >
                                    <div class="list-group-item">
                                      
                                        <a class="dropdown-item text-center" href="<?php echo ROOT_URL; ?>input/wtinput">Add Measurement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($ht) : ?>
                    <div class="col-lg-6" style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 0px 0px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div  class="col-md-6 " ><h4  style="color: #FFCCBC;">Height</h4></div>
                                <div class="col-md-6 " >
                                    <div class="dropdown show">
                                      <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/httable">Table View</a>
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/htinput">Add Another Measurement</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 0px;margin-right: 0px;border-radius: 0px 0px 6px 6px;" id="chart_ht">
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 9px 9px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-12 " ><h4  style="color: #FFCCBC;">Height</h4></div>
                                <div class="col-md-12 " >
                                    <div class="list-group-item">
                                      
                                        <a class="dropdown-item text-center" href="<?php echo ROOT_URL; ?>input/htinput">Add Measurement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($wt) : ?>
                    <div class="col-lg-6" style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 0px 0px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div  class="col-md-6 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-6 " >
                                    <div class="dropdown show">
                                      <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/wttable">Table View</a>
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/wtinput">Add Another Measurement</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 0px;margin-right: 0px;border-radius: 0px 0px 6px 6px;" id="chart_wt">
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 9px 9px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-12 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-12 " >
                                    <div class="list-group-item">
                                      
                                        <a class="dropdown-item text-center" href="<?php echo ROOT_URL; ?>input/wtinput">Add Measurement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($wt) : ?>
                    <div class="col-lg-6" style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 0px 0px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div  class="col-md-6 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-6 " >
                                    <div class="dropdown show">
                                      <a class="btn btn-warning dropdown-toggle pull-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/wttable">Table View</a>
                                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>input/wtinput">Add Another Measurement</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 0px;margin-right: 0px;border-radius: 0px 0px 6px 6px;" id="chart_wt">
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-6 " style="padding-bottom: 10px">
                        <div class="card-body border" style="padding: 2px;border-radius: 9px 9px 9px 9px; background-color: #fff ;">
                            <div class="row" style="background-color: #9E9E9E ;padding-top: 15px;padding-bottom: 10px;border-radius: 9px 9px 9px 9px;margin-left: -2px;margin-right: -2px;margin-top: -2px;">
                                <div class="col-md-12 " ><h4  style="color: #FFCCBC;">Weight</h4></div>
                                <div class="col-md-12 " >
                                    <div class="list-group-item">
                                      
                                        <a class="dropdown-item text-center" href="<?php echo ROOT_URL; ?>input/wtinput">Add Measurement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
                 
    </div>             
</div>
</body>
</html>      

    <script type="text/javascript">google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable(<?php echo $LineChart_bp; ?>);
      data.addColumn('string', 'X');
      data.addColumn('number', 'Systolic');
      data.addColumn('number', 'Diastolic');
      //<?php// print_r($LineChart_data); ?>
        data.addRows(<?php echo $LineChart_bp; ?>);
     /* data.addRows([]);*/

      var options = {
        vAxis: {
          title: 'mmHG'
        },
        hAxis: {
          title: 'Date'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_bp'));
      chart.draw(data, options);
    }
google.charts.setOnLoadCallback(drawCurveTypes_wt);

function drawCurveTypes_wt() {
      var data = new google.visualization.DataTable(<?php echo $LineChart_bp; ?>);
      data.addColumn('string', 'Date');
      data.addColumn('number', 'Weight');
      //data.addColumn('number', 'Diastolic');
      //<?php// print_r($LineChart_data); ?>
        data.addRows(<?php echo $LineChart_wt; ?>);
     /* data.addRows([]);*/

      var options = {
        vAxis: {
          title: 'KiloGram'
        },
        hAxis: {
          title: 'Date'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_wt'));
      chart.draw(data, options);
    }
google.charts.setOnLoadCallback(drawCurveTypes_ht);

function drawCurveTypes_ht() {
      var data = new google.visualization.DataTable(<?php echo $LineChart_bp; ?>);
      data.addColumn('string', 'Date');
      data.addColumn('number', 'Height');
      //data.addColumn('number', 'Diastolic');
      //<?php// print_r($LineChart_data); ?>
        data.addRows(<?php echo $LineChart_ht; ?>);
     /* data.addRows([]);*/

      var options = {
        vAxis: {
          title: 'Centimeter'
        },
        hAxis: {
          title: 'Date'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_ht'));
      chart.draw(data, options);
    }
</script>