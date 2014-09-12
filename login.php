<html>
<head>
	<title> Login </title>
</head>

<body>
<div class = 'header'>
	<?php include 'header.php';?>
</div>
<div>
	<form action = "checklogin.php" method = "POST">
	<p class="usrname">Username</p> <input class="box" type = "text" name = "username" required = "required" /> <br>
	<p class="usrname">Password </p><input class="box" type = "password" name = "password" required = "required" /> <br>
	<br>
	<input id = "button" type = "submit" value = "login" />
</div>
</form>
</body>

</html>
