<?php
	session_start();
	echo 'hi';
	if ($_SESSION['user']) {}
	else {
		header("location: index.php"); 
	}
	$user = $_SESSION['user'];
	$id = $_SESSION['id']; 
	echo 'hi';
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	echo 'hi';
		$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
		//insert posts into database
		$sql="INSERT into blog_posts (post_title,content,author_name,post_date) values($_POST['blogtitle'],$_POST['content'],$user,now())";

		mysqli_query($con,$sql);
		echo “Post added”;
	}
	else {
		header("location:home.php");
	}
?>
