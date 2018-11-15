<!DOCTYPE html>
<html>
<head>
    <title></title>

  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

    </style>
</head>
<body>


<div class="container target" style=""> 

        <div class="row" style="margin-top: 10px;padding-top: 20px; background-color: #;">
            <div class="col-sm-2"><a href="<?php echo ROOT_URL; ?>input/updatepic" class="pull-right" ><img title="profile image" class="img-fluid rounded-circle" alt="Responsive image" src="<?php echo ROOT_URL_PREV.$_SESSION['dg_data']['profile_pic']?>"></a>

            </div>

            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p><?php echo $_SESSION['dg_data']['name'];?></p>
                    </li>
                    <!--<li class="list-group-item text-left">
                        <p>+880<?php echo $_SESSION['dg_data']['phone_no']; ?></p>
                    </li>-->
                </ul>
            </div>
         <!--   <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p>Gender:<?php //echo $_SESSION['dg_data']['sex']; ?></p>
                    </li>
                    <li class="list-group-item text-left">
                        <p>DOB:<?php// echo $_SESSION['dg_data']['dob']; ?></p>
                    </li>
                </ul>
            </div>-->
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p><?php echo $_SESSION['dg_data']['email']; ?></p>
                    </li>
                  <!--  <li class="list-group-item text-left">
                         <p><?php// echo $_SESSION['user_data']['phone_no']; ?></p> 
                    </li>-->
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p>+880<?php echo $_SESSION['dg_data']['phone_no']; ?></p>
                    </li>
                  <!--  <li class="list-group-item text-left">
                        <p><?php// echo $_SESSION['user_data']['id']; ?></p>
                    </li>-->
                </ul>
            </div>
        </div>
<div class="row">
        <div class="col-sm-3" style="padding-top: 100px;">
            <!--left col-->
            <ul class="list-group" >

                
                <li class="list-group-item text-center">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/profile" class="" ><strong style="color: #59d">Your Profile</strong></a>
                </li>
                <li class="list-group-item text-center">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>diagnostic/records" class="" ><strong class="" style="color: #59d">Uploaded Medical Records</strong></a>
                    </li>
           <!--     <li class="list-group-item text-center">
                    <a class="nav-link" href="<?php// echo ROOT_URL; ?>users/appoinments" class="" ><strong class="" style="color: #59d">Appoinments</strong></a>
                </li>
                <li class="list-group-item text-center">
                    <a class="nav-link" href="<?php //echo ROOT_URL; ?>users/mydoctors" class="" ><strong class="" style="color: #59d">Your Doctors</strong></a>
                </li>
                <li class="list-group-item text-center">
                    <a class="nav-link" href="<?php //echo ROOT_URL; ?>users/myarticles" class="" ><strong class="" style="color: #59d">Your Articles</strong></a>
                </li>-->
                
            </ul>
        </div>
    <div class="col-sm-9">
        <div class="row"  >
            <div class="col-md-12" style="padding: 0px;">
                <div class="list-group-item text-center"  style="background-color: #004D40;border-radius: 5px 5px 0px 0px;">
                     <h4><strong style="color: #eef;">Records</strong></h4>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 0px;">
          <div class="col-lg-12" style="padding: 0px;">
        
                    <div class=" table-responsive" style="padding: 0px;background-color: #fff;">
                                    <table class="table table-bordered table-striped small" style="text-align: center;">
                                        <thead class="thead-dark small">
                                            <th> Date  </th>
                                            <th>Patient Id</th>
                                            <th>Patient Name</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        
                                        </thead>
                                        <tbody >
                                       <?php foreach($_SESSION['dg_doc_result'] as $bpre) : ?>
                                            <tr class="small" >
                                                <td><?php  echo $bpre['app_date']; ?></td>
                                                <td><?php echo $bpre['user_id']; ?></td>
                                                <td><?php echo $bpre["user_name"] ?></td>
                                                <td><?php echo $bpre["doc_type"] ?></td>
                                                
                                                <td>
                                                    <div class="link">
                                                   <a   href="<?php echo ROOT_PATH.$bpre["doc_loc"];?>"     >View</a> </div>
                                                </td>
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



</body>
</html>