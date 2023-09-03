<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="styler.css">
</head>
<body id="bg" style="background-image:url('images/logg.jpg');">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username :</label>
  	  <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email :</label>
  	  <input type="email" name="email"  placeholder="Enter your email"value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password :</label>
  	  <input type="password" name="password_1" placeholder="Enter password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password :</label>
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>