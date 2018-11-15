<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

</head>
<body>
<div class="login">
    <h2>User Login</h2>
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

  <fieldset>    
        
        <input type="text" name="email" placeholder="Email" />
        
        <input type="password" name="password" placeholder="Password" />
  </fieldset>
      <input class="btn" name="submit" type="submit" value="Log In" />
    </form>  
    <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="<?php echo ROOT_URL; ?>users/register"">Sign Up &rarr;</a>
  </div>
  </div>
</body>
</html>






<!--
  <div class="login">
  <h2>Log In</h2>
  <fieldset>
    <input type="email"  />
    <input type="password"  />
  </fieldset>
  <input type="submit" value="Log In" />

</div>
  
-->