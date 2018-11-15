<?php $boot = new Boot($_GET);
    $lang=$boot->language;
    $controller=$boot->controller;
    $action=$boot->action;
    $id=$_GET['id'];

?>
<html>
<head>
  <title>HealthID</title>

  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/login_form.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="<?php echo ROOT_PATH; ?>assets/img/favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>
<body style="background: #ffa">
	<nav class="navbar    navbar-expand-lg navbar-dark " style="background-color: #4A148C;">
      <div class="container">
        <div class="navbar-header">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>

          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">
          <img class="d-inline-block align-top" alt="" src="<?php echo ROOT_PATH; ?>assets/img/logow.png" height="30" width="120">
          </a>

        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <?php if(!isset($_SESSION['dg_is_logged_in'])) : ?>

            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a></li>

            <?php else : ?>
              <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>input">Shares</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Sakib</a></li>
            <?php endif; ?>

            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL_PREV.'bn'."/".$controller."/".$action."/".$id; ?>"><button type="button" class="btn btn-default btn-xs">বাংলা</button></a></li>

          </ul>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               

            <?php if(isset($_SESSION['dg_is_logged_in'])) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/profile">Welcome <?php echo $_SESSION['dg_data']['name']; ?></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/logout">Logout</a></li>
          <?php else : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/register">Register</a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="containevr">

     <div class="rocw">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>
     

    </div><!-- /.container -->
</body>
</html>