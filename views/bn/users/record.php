<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body style="background-color:#ECEFF1 ">

        
    <div class="container target">

        <?php require("views/en/users/profileinfo.php"); ?>   
  <br>
    <div class="row">
      <?php Messages::display(); ?>
        <?php require("views/en/sidebar.php"); ?>   



<div class="col-md-9">
    <div class="thumbnail">
        <div class="row" >
            <div class="col-md-12" style="padding-bottom: 3px;">
                <div class="list-group-item shadow " style="border-radius: 0px;">
                     <a class="nav-link d-flex justify-content-end" href="<?php echo ROOT_URL;?>input/addrecorduser"><h4><strong style="color: blue;">Add Record</strong></h4></a>
                </div>
            </div>
        </div>
<?php foreach($_SESSION['doc_result'] as $docresult) : ?>               
        <div class="list-group  " >
    <a style="border-radius: 0px;" class="list-group-item list-group-item-action list-group-item-light shadow "  href="<?php echo ROOT_URL;?>users/viewrecord/<?php echo $docresult['docid']; ?>" >    
                <div class="row" >
                        <div class="col-6 col-md-2">
                            <?php  echo $docresult['app_date']; ?>
                        </div>
                        <div class="col-6 col-md-6">
                            <strong><?php  echo $docresult['disease_title']; ?></strong><br>
                            Records for
                            <?php  echo $docresult['user_name']; ?>
                        </div>
                        <div class="col-6 col-md-2" >
                            <div clashs="pull-right">
                                <?php  echo $docresult['doc_type']; ?>
                            </div>
                        </div> 
                        <div class="col-6 col-md-2" >
                            <div class="pull-right">                       
                                ::
                            </div>
                        </div> 
                </div>  
    </a>       
</div>         

<?php endforeach; ?>              

    </div>
</div>
</div>
</div>

</body>
</html>
