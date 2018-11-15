<?php $boot = new Boot($_GET);
    $lang=$boot->language;
    $controller=$boot->controller;
    $action=$boot->action;
    $id=$_GET['id'];
    

?>
<html>
<head>
	<title>Heartbeat</title>

  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="<?php echo ROOT_PATH; ?>assets/img/favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>
<body stsyle="backgroufnd: #ECEFF1">
	<nav class="navbar sticky-top border-bottom bodrder-secondary navbar-expand-lg navbar-light shadow" style="background-color: #fff;">
      <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">
          <img class="d-inline-block align-top" alt="" src="<?php echo ROOT_PATH; ?>assets/img/logo.png" height="30" width="120">
          </a>
          
        

          


    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item" >
              <a class="nav-link" href="<?php echo ROOT_URL_PREV.'en'."/".$controller."/".$action."/".$id; ?>"><button type="button" class="btn btn-default btn-xs">ENGLISH</button></a>
            </li>

<!--            <?php// if(!isset($_SESSION['is_logged_in'])) : ?>

            <li><a href="<?php// echo ROOT_URL; ?>">Home</a></li>

            <?php //else : ?>
              <li><a href="<?php// echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php// echo ROOT_URL; ?>input">Shares</a></li>
            <li><a href="<?php// echo ROOT_URL; ?>shares">Sakib</a></li>
            <?php// endif; ?>-->
    </ul>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

  <!--    <form class="form-inline my-2 my-lg-0" role="search">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
      </form> -->
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/profile">Welcome <?php echo $_SESSION['user_data']['first_name']." ".$_SESSION['user_data']['last_name']; ?></a></li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">লগ আউট</a></li>
          <?php else : ?>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/index">ডায়াগনিস্টিক সেন্টার এর জন্য</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">লগ ইন</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">রেজিস্টার
            </a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="czontainer">

     <div class="zrow">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>
     

    </div><!-- /.container -->
</body>
</html>