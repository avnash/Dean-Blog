<?php
	session_start(); 
	if($_SESSION['user']){}
	else {
		header("location: index.php"); 
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$con1 = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
		//inserts comments into db
		$pid = mysqli_real_escape_string($con1, $_POST['pid']);
		$commentauthor = mysqli_real_escape_string($con1, $_POST['author']);
		$comment = mysqli_real_escape_string($con1, $_POST['comm']);
		$sql="INSERT INTO comments(comments,postid,author) VALUES('$comment','$pid','$commentauthor')";
		mysqli_query($con1,$sql);
		header("location:homeUser.php");	
	}
	else {
		header("location:homeUser.php");
	}

?>