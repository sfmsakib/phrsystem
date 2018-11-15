<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title></title>
      <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/stylenew.css">

	<style type="text/css">
	.containere{
		margin-top: 0px;
		margin-left: 0px;
		background-color: #f11;
	}
	.containeree{
	padding-top: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 0px;
    background-color: #;

	text-align: center;
	}
	.col-lg-4{
				background-color: #fff;

	}

.back  {
    /*background-image: url("<?php// echo ROOT_PATH; ?>assets/img/backa.jpg");*/
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    background-size: 100% 100%;
    background-color: #FFF9C4;
}




</style>
</head>
<body>

    <div class="  back">
			<div class= "container" class="" style="margin-bottom: 0;">
                <div class="row">
                    <div class="col-sm-6">
                        <br><br><br><br>
                <h1 style="color: black;" >Create an account for your Diagnostic Center</h1>
                <p  style="color: black;" class="lead">Deliver patient lab report <br>Save time! Serve more!</p>
                <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>diagnostic/login">Get your free profile</a>
                 
                    </div>
                    <div class="col-sm-6 " style="padding-top: 80;padding-bottom: 60px; padding-left: 140;">
                                <img clasrs="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/doctorp.png" height="300px">

                    </div>
                </div>
				
			</div>
    </div>
    <div class="home-banner-dg ">
</div>
<div class="content">

           


        <div class="container">

<div class="row justify-content-md-center content-position">
    <div class="col-lg-6 col-md-10 col-sm-12 mx-auto text-left">
        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/report.png" height="300px">
    </div> 
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left ">
        <h2>Online Report Delivary</h2> 
        <p class="lead">Upload test report of patient with the help of HealthID and serve more patient.Patients are looking for that service.</p>
        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Learn More</a>
    </div>
</div>   </div><div class="containers">
<div class="row justify-content-md-center content-position"  style="overflow: hidden; background-color: #ECEFF1;" >
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left" style="background-color: #ECEFF1;">
        <h3>Make a profile</h3> 
        <p class="lead">Your diagonistic profile will found on search of patients. Get good review and ratings from patients.And be the topper of the search list.</p>
        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Start Writing</a>
    </div>
    <div style="background-color: #ECEFF1;" class="col-lg-4 col-md-10 col-sm-12 mx-auto text-right ">
        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/art.png" height="300px">
    </div> 
</div></div>
</div>
<div class="content-footer footedrs-shdadow">
        <div class="container" style="padding: 0px;  ">
<?php require("views/en/footer.php"); ?>
    </div>
</div>
</body>
</html>

