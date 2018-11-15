	 	<div class="row" style=" padding-top: 10px; margin-top: 10px;border-radius: 5px;background: #fff;">
	 		<div class="col-sm-2"><a href="<?php echo ROOT_URL; ?>input/updatepic" class="pull-right" ><img height="100" width="100" title="Update Profile Picture" class="img-fluid rounded-circle" alt="Profile Picture" src="<?php echo ROOT_URL_PREV.$_SESSION['user_data']['profile_pic']?>"></a>
        </div>
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p><?php echo $_SESSION['user_data']['first_name']; echo" ";echo $_SESSION['user_data']['last_name']; ?></p>
                    </li>
                    <li class="list-group-item text-left">
                        <p>+880<?php echo $_SESSION['user_data']['phone_no']; ?></p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p>Gender:<?php echo $_SESSION['user_data']['sex']; ?></p>
                    </li>
                    <li class="list-group-item text-left">
                        <p>DOB:<?php echo $_SESSION['user_data']['dob']; ?></p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left border ">
                        <div class="list-group-item text-center border border-danger" style="padding-top: 5px;padding-right: 0px;padding-left: 0px;padding-bottom:0px;margin: -5px;"> 
                        <p>Health ID:<strong><?php echo $_SESSION['user_data']['user_id']; ?></strong></p>
                        </div>
                    </li>
                    <li class="list-group-item text-left">
                        <p><?php echo $_SESSION['user_data']['email']; ?></p> 
                    </li>
                </ul>
            </div>
            <!--<div class="col-sm-3">
                <ul>
                    <li class="list-group-item text-left">
                        <p><?php// echo $_SESSION['user_data']['id']; ?></p>
                    </li>
                    <li class="list-group-item text-left">
                        <p><?php// echo $_SESSION['user_data']['id']; ?></p>
                    </li>
                </ul>
            </div>-->
        </div>