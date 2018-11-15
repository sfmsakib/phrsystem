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
    background-color: #880E4F;
    margi n-to p: 8%;
}
.backdg  {
    /*background-image: url("<?php// echo ROOT_PATH; ?>assets/img/backa.jpg");*/
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    background-size: 100% 100%;
    background-color: #FFF9C4;
}

.tab {
    margin-top: 1%;
    background-color: white;
    posis\tion: fixxed;
}




</style>
</head>
<body>

<nav class="tab navbar sticky-top">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Doctors</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dignastic</a>

  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div>
        <div class="  back">
            <div class= "container" class="" style="margin-bottom: 0;">
                <div class="row">
                    <div class="col-sm-6">
                        <br><br><br><br>
                        <h1 style="color: white;" >Patients are looking for doctors like you</h1>
                        <p  style="color: white;" class="lead">Millions of patients are looking for the right doctor.<br> Start your digital journey from here</p>
                        <a class="btn btn-outline-warning text-center" href="<?php echo ROOT_URL;?>doctors/signup">Get your free profile</a>
                    </div>
                    <div class="col-sm-6 " style="padding-top: 80;padding-bottom: 80px; padding-left: 140;">
                        <img clasrs="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/doctorp.png" height="300px">
                    </div>
                </div> 
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row justify-content-md-center content-position">
                    <div class="col-lg-6 col-md-10 col-sm-12 mx-auto text-left">
                        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/doctorlive.png" height="300px">
                    </div> 
                    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left ">
                        <h2>Online Consultation</h2> 
                        <p class="lead">Consult online and grow your practice. Reach new patients and connect with your patients online.</p>
                        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Learn More</a>
                    </div>
                </div>   
            </div>
            <div class="containers">
                <div class="row justify-content-md-center content-position"  style="overflow: hidden; background-color: #ECEFF1;" >
                    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left" style="background-color: #ECEFF1;">
                        <h3>Health Feed</h3> 
                        <p class="lead">Publish health tips to educate and inspire millions of people to lead a healthier lifestyle</p>
                        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Start Writing</a>
                    </div>
                    <div style="background-color: #ECEFF1;" class="col-lg-4 col-md-10 col-sm-12 mx-auto text-right ">
                        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/art.png" height="300px">
                    </div> 
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div>
        <div class="  backdg">
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
                </div>   
            </div>
            <div class="containers">
                <div class="row justify-content-md-center content-position"  style="overflow: hidden; background-color: #ECEFF1;" >
                    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left" style="background-color: #ECEFF1;">
                        <h3>Make a profile</h3> 
                        <p class="lead">Your diagonistic profile will found on search of patients. Get good review and ratings from patients.And be the topper of the search list.</p>
                        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Start Writing</a>
                    </div>
                    <div style="background-color: #ECEFF1;" class="col-lg-4 col-md-10 col-sm-12 mx-auto text-right ">
                        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/art.png" height="300px">
                    </div> 
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="content-footer footedrs-shdadow">
        <div class="container" style="padding: 0px;  ">
<?php require("views/en/footer.php"); ?>
    </div>
</div>
</body>
</html>

