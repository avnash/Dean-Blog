<?php
	  @session_start(); 
	   if($_SESSION['user']){ 
	   }
	   else {
	      header("location: index.php"); 
	   }
	
		$con = mysqli_connect("localhost", "root","a","DeanBlog") or die(mysql_error());
		//insert posts into database
$target = "uploads/";  $target = $target . basename( $_FILES['filename']['name']); 

		$title = mysqli_real_escape_string($con, $_POST['blogtitle']);
		$content = mysqli_real_escape_string($con, $_POST['content']);
		$comment = mysqli_real_escape_string($con, $_POST['comment']);
		$file=($_FILES['filename']['name']); 
		if($comment != "disable") $comment = "enable";
		$sql="INSERT INTO blog_posts(post_title,content,author_name,post_date,comment,file_name) VALUES('$title','$content','$user',NOW(),'$comment','$file')";
		$_SESSION['decision'] = 'yes';
		include 'newpost.php';
		mysqli_query($con,$sql);
		move_uploaded_file($_FILES['filename']['tmp_name'], $target);
//		header("location:homeUser.php");
		
?>
