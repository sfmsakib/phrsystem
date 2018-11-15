
<div class="reg">
    <h2>Register User</h2>
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

  <fieldset>    
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="First Name" class="form-control" />
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name" class="form-control" />

             <label>Add File</label>
            <input type="file" name="profile_pic" class="form-control" />
            <p class="help-block">Upload JPEG/PNG Files that are below 1MB</p>
            <label>Gender</label>
            <select class="form-control" name="sex" placeholder="Gender" type="text">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
            </select> 
            <label>Date of Birth</label>
            <input type="date" name="dob"  class="form-control">
            <label>Phone Number</label>
            <input type="text" name="phone_no" placeholder="Phone Number" class="form-control"/> 
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" />
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" />
  </fieldset>
        <input class="btn" name="submit" type="submit" value="Sign Up" />
    </form> 
    <div class="utilities">
        <a >Already a member? </a>
    <a href="<?php echo ROOT_URL; ?>users/login""> Please Log In &rarr;</a>
  </div> 
  </div>
