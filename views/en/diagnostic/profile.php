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

<div class="dguser">
     <p>To upload report insert patient ID and Password</p>
          <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

  <fieldset>    
        
        <input type="text" name="p_id" placeholder="Patient ID" />
        
        <input type="password" name="password" placeholder="Password" />
  </fieldset>
      <input class="submitclass" name="submit" type="submit" value="Submit" />
    </form> 
</div>
</div>