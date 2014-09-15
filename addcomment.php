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
		$sectionid = mysqli_real_escape_string($con1, $_POST['sectionid']);
		echo $sectionid;
		$sql="INSERT INTO comments(comments,postid,author,date) VALUES('$comment','$pid','$commentauthor',NOW())";
		mysqli_query($con1,$sql);
		header("location:homeUser.php?sectionid=$sectionid");	
	}
	else {
		header("location:homeUser.php");
	}

?>
