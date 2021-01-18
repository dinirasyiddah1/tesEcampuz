<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
<form action="login_aksi.php" method="post">
		       
	username : <input type="text" name="username">
	password : <input type="password" name="password">
	<button name="submit" type="submit">Login</button>
</form>
</body>
</html>