<?php
	
	session_start(); 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$error = "no";

	$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error()); //Connect to server
	
	$strSQL = "SELECT * FROM Users WHERE username = '$username'";
	$query = mysqli_query($con,$strSQL); 
	$exists = mysqli_num_rows($query); 
	$strSQL_stud = "SELECT * FROM Students WHERE username = '$username'";
	$query_stud = mysqli_query($con,$strSQL_stud); 
	$exists_stud = mysqli_num_rows($query_stud); 
	
	$table_users = "";
	$table_password = "";

	if($exists > 0) {
		$row = mysqli_fetch_array($query);
		$table_pwd = $row['password'];
		$table_users = $row['username'];
		$id = $row['id'];
		if (password_verify($password, $table_pwd)) {
			$_SESSION['user'] = $username;
			$_SESSION['id'] = $id;
			
			header("location:homeUser.php");
		}
		else {
			$error = "pwd";
			header("location: login.php"); 
		}
	}
	
	else if($exists_stud > 0) {
		$row = mysqli_fetch_array($query_stud);
		$table_pwd = $row['password'];
		$table_users = $row['username'];
		$id = $row['id'];
		if (password_verify($password, $table_pwd)) {
			$_SESSION['user_stud'] = $username;
			$_SESSION['id_stud'] = $id;
			
			header("location:homeUser.php");
		}
		else {
			$error = "pwd";
			header("location: login.php"); 
		}
	}
	else {
		$error = "usr";
		header("location: login.php"); 
		
	}
?>
