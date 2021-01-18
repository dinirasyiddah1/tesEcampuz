<?php
include ('connect.php');
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = md5($password);
	$sql = pg_query("SELECT * FROM admin WHERE username_admin='$username' and password='$pass'");
	
	}
}
?>