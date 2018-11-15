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
    background-image: url("<?php echo ROOT_PATH; ?>assets/img/backa.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    background-size: 100% 100%;
    background-color: #fff;
}




</style>
</head>
<body>

    <div class="  back">
			<div class= "container" class="" style="margin-bottom: 0;">
                <div class="row">
                    <div class="col-sm-6">
                        <br><br><br><br>
                <h1 style="color: white;" >A platform for Patient, Doctor and Diagnostic/Hospital.</h1>
                <p  style="color: white;" class="lead">Where patient can get service from Doctor and from diagnostic/hospital. Patient could store their medical data securly and track them from everywhere.</p>
                <a class="btn btn-outline-warning text-center" href="<?php echo ROOT_URL;?>users/profile">Get Start</a>
                <br><br><br>
                    </div>
                   <!-- <div class="col-sm-6 text-left" style="padding-top: 180;padding-left: 240;">
                        <form class="form-inline my-2 my-lg-0" role="search">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-danger my-2 my-sm-0" type="submit">Submit</button>
      </form>
                    </div> -->
                </div>
				
			</div>

<div class="content">

           
<div class="home-banner ">
    <div class="row justify-content-md-center" style="color: white;">
        <div class="col col-lg-2">
            <a class="nav-link" href="<?php echo ROOT_URL."/users/profile" ?>"  class="banner-footer-item">
            <i class="material-icons md-24" style="font-size:23px;color:white;">content_paste</i><br>
            <span>View Medical Record</span>
            </a>
        </div>
        <div class="col col-lg-2">
            <a class="nav-link" href="#"  class="banner-footer-item">
            <i class="material-icons md-24" style="font-size:23px;color:white;">library_books</i><br>
            <span>Read Articles</span>
        </a>
        </div>
        <div class="col col-lg-2">
            <a class="nav-link" href="<?php echo ROOT_URL."doctors/search" ?>"   class="banner-footer-item">
            <i class="material-icons md-24" style="font-size:23px;color:white;">search</i><br>
            <span>Find Your Doctor</span>
            </a>
        </div>
        <div class="col col-lg-2">
            <a class="nav-link" href="<?php echo ROOT_URL."diagnostic/search" ?>" class="banner-footer-item">
            <i class="material-icons md-24" style="font-size:23px;color:white;">youtube_searched_for</i><br>
            <span>Find Diagnosis</span>
            </a>
        </div>
        <div class="col col-lg-3">
            <a class="nav-link" href="<?php echo ROOT_URL;?>home/hcprovider" target="_blank" class="banner-footer-item">
            <i class="material-icons md-24" style="font-size:23px;color:white;">business_center</i><br>
            <span>For Healthcare Provider</span>
            </a>
        </div>
    </div>
</div>

        <div class="container">

<div class="row justify-content-md-center content-position">
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left ">
        <h2>Your home of health</h2> 
        <p class="lead">Manage your health record. <br>Store your Medical report.<br>Access From Everywhere</p>
        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Get Start</a>
    </div>
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-right">
        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/11.png" height="300px">
    </div> 
</div>   <!--</div>-->
<div class="row justify-content-md-center content-position"  style="overflow: hidden; background-color: #ECEFF1;" >
    <div style="background-color: #ECEFF1;" class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left ">
        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/doctor1.png" height="300px">
    </div> 
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left" style="background-color: #ECEFF1;">
        <h3>Find Your doctor</h3> 
        <p>Search find and book your docor. <br>Easy and faster to use.<br>Send your medical document to doctor and get suggetion. <br>Also get E-Prescription from doctor.</p>
        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Get Start</a>
    </div>
</div>
<div class="row border justify-content-md-center content-position" >
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-left">
        <h3>Find your Diagnostic/Hospital.</h3> 
        <p>Search for nearby hospitals and diagnostic center.<br>Book your appointment.<br>Also get your E-report from diagnostic center.</p>
        <a class="btn btn-outline-info text-center" href="<?php echo ROOT_URL;?>users/profile">Get Start</a>
    </div>
    <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-right">
        <img class="mb-4" src="<?php echo ROOT_PATH; ?>assets/img/diagnostic.png" height="300px">
    </div> 
</div>
   <!-- <div class="container">-->
            <div class="row justify-content-md-center">
            <h1  >Read articles from health experts</h1>
            </div>     
        <div class="row " style=" padding-top: 80;">
            <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-center">
              <div class="card mb-4 shadow" style="border-radius: 0px;">
                <img class="card-img-top" alt="Thumbnail [100%x225]" src="<?php echo ROOT_URL_PREV."assets/img/article.jpg";?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <div class="card-header"><h3>Skin Care</h3></div>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to your List</button>
                    </div>
                    <small class="text-muted">20 mins</small>
                  </div>
                </div>
              </div>
            </div>
                    
           <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-center">
              <div class="card mb-4 shadow" style="border-radius: 0px;">
                <img class="card-img-top" alt="Thumbnail [100%x225]" src="<?php echo ROOT_URL_PREV."assets/img/wtloss.jpg";?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <div class="card-header"><h3>Loss Weight</h3></div>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to your List</button>
                    </div>
                    <small class="text-muted">1 hours</small>
                  </div>
                </div>
              </div>
            </div>
                    
           <div class="col-lg-4 col-md-10 col-sm-12 mx-auto text-center">
              <div class="card mb-4 shadow" style="border-radius: 0px;">
                <img class="card-img-top" alt="Thumbnail [100%x225]" src="<?php echo ROOT_URL_PREV."assets/img/nohairfall.jpg";?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <div class="card-header"><h3>Stop Hairfall</h3></div>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to your List</button>
                    </div>
                    <small class="text-muted">1 week</small>
                  </div>
                </div>
              </div>
            </div>
                    
        </div>
            <div class="row justify-content-md-center" style=" padding-top: 50;padding-bottom: 50px;">
            <a href="#" ><button class="btn btn-lg btn-outline-info">More Articles</button></a>
            </div> 
        </div>
<div class="content-footer footedrs-shdadow">
        <div class="container" style="padding: 0px;  ">
<?php require("views/en/footer.php"); ?>
    </div></div>
</div></div>
</body>
</html>

