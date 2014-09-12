<?php
	   $user = $_SESSION['user']; 
	   $id = $_SESSION['id'];
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
		//insert posts into database
		$title = mysqli_real_escape_string($con, $_POST['blogtitle']);
		$content = mysqli_real_escape_string($con, $_POST['content']);
		$sql="INSERT INTO blog_posts(post_title,content,author_name,post_date) VALUES('$title','$content','$user',NOW())";
		$_SESSION['decision'] = 'yes';
		include 'newpost.php';
		mysqli_query($con,$sql);
		
	}
	else {
		header("location:homeUser.php");
	}
?>
