<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/stylel.css">
  
</head>
<body id="bg" style="background-image:url('images/log.jpg');">
  <div class="login-box">
  <h1 style="color: black;">Login</h1>
	<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="textbox">
      <i class="fas fa-user"></i>
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter Username" >
  	</div>
  	<div class="textbox">
      <i class="fas fa-lock"></i>
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter password">
  	</div>
  	<div class="textbox">
  		<button type="submit" class="btn" name="login_user" href="index.html">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>