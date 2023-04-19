<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
     <form action="login.php" method="post">
     	<h1>LOGIN</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <div class="input-box underline">
     	<input type="text" name="uname"><br>
		<div class="underline"></div>
		<div class="underline"></div>
        </div>
        <div class="input-box">
		<input type="password" name="password"><br>
        <div class="underline"></div>
	    </div>
        <div class="input-box button">
		<input type="submit" name="" value="Continue">
        </div>
        <div class="input-box button">
        <a href="signup.php" class="ca">Create an account</a>
		</div>
     </form>
</body>
</html>