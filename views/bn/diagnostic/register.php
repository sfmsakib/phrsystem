
<div class="reg">
    <h2>Diagnostic Register</h2>
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

  <fieldset>    
            <label>Diagnostic Name</label>
            <input type="text" name="dgname" placeholder="Name" class="form-control" />
             <label>Add Profile Pic</label>
            <input type="file" name="profile_pic" class="form-control" />
            <p class="help-block">Upload JPEG/PNG Files that are below 1MB</p>
            <label>Phone Number</label>
            <input type="text" name="phone_no" placeholder="Phone Number" class="form-control"/> 
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" />
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" />
  </fieldset>
        <input class="submitclass" name="submit" type="submit" value="Sign Up" />
    </form> 
    <div class="utilities">
        <a >Already a member? </a>
    <a href="<?php echo ROOT_URL; ?>diagnostic/login""> Please Log In &rarr;</a>
  </div> 
  </div>
