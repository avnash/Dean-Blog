<?php
	  @session_start(); 
	   if($_SESSION['user']){ 
	   }
	   else {
	      header("location: index.php"); 
	   }
	if($_SERVER["REQUEST_METHOD"] == "POST") {	
		$con = mysqli_connect("localhost", "root","a","DeanBlog") or die(mysql_error());
		//insert posts into database

		$title = mysqli_real_escape_string($con, $_POST['blogtitle']);
		$content = mysqli_real_escape_string($con, $_POST['content']);
		$comment = mysqli_real_escape_string($con, $_POST['comment']);
		if($comment != "disable") $comment = "enable";
		$sql="INSERT INTO blog_posts(post_title,content,author_name,post_date,comment) VALUES('$title','$content','$user',NOW(),'$comment')";
		$_SESSION['decision'] = 'yes';
		include 'newpost.php';
		mysqli_query($con,$sql);
		header("location:homeUser.php");

	}
	else {
		header("location:homeUser.php");
	}		


?>

