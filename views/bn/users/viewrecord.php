<!DOCTYPE html>
<html>
<head>
  <title></title>

<style type="text/css">
  .bck{
    background: #bbccc0;
  }
</style>
</head>
<body style="background-color:#ECEFF1 ">
    <div class="container target">

        <?php require("views/en/users/profileinfo.php"); ?>   
  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   


        <div class="col-md-9">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">  
                    <i class="material-icons md-24" style="font-size:23px;color:red;">        
                    <a  href="<?php echo ROOT_URL;?>users/record" class="bgtn bftn-warning" role="fbutton">backspace<i style="font-size:25px;color:red;">BACK</i></a>
                    </i>
  <br><br>
                      <a href="<?php echo ROOT_PATH . $_SESSION['doc_result_single']['doc_loc']; ?>"> 
                      <img class="card-img-top" src="<?php echo ROOT_PATH . $_SESSION['doc_result_single']['doc_loc']; ?>" alt=""></a>
                  <div class="caption">
                    <h3><?php echo  $_SESSION['doc_result_single']['disease_title']; ?></h3>
                    <p><?php echo  $_SESSION['doc_result_single']['doc_type']; ?></p>
                    <a href="<?php echo ROOT_PATH.$_SESSION['doc_result_single']['doc_loc'];?>" class="btn btn-primary" role="button">View</a>
        <form class="pull-right" method="POST" action="">
            <input type="hidden" name="bpdelete_id" value="<?php echo $bpre['bpid']; ?>">
           <i class="material-icons text-white"> <input classs="btn-floating waves-effect waves-light btn red tooltipped" class="btn btn-danger" name="bpdelete" type="submit" value="edit" /></i>
        </form>     
                  </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>
</body>
</html>      
