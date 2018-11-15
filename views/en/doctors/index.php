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
}




</style>
</head>
<body>

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
</div>   </div><div class="containers">
<div class="row justify-content-md-center content-position"  style="overflow: hidden; background-color: #ECEFF1;" >
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left" style="background-color: #ECEFF1;">
        <h3>Health Feed</h3> 
        <p class="lead">Publish health tips to educate and inspire millions of people to lead a healthier lifestyle</p>
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

