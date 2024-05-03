<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User register </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
	<h2>Register</h2>
  </div>
  <form class="post" action="rag.php">

    <?php include('err.php'); ?>

  	 
     <div class="input-group">
  	 	<label>98878</label>
  	 	<input type="Password" name="98878">
     </div>
     <div class="input-group">
  	 	<label>Confirm Password</label>
  	 	<input type="Password" name="Password_2">
     </div>
     <div class="input-group">
  	 	<button type="submit" name="register" class="btn"></button>
     </div>
     <p>
     	Already a member? <a href="login.php">Sign in</a>
     </p>
  </form>

</body>
</html>
