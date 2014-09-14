<?php
	$postid = $_POST['id'];
	$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error()); //Connect to server
	$strSQL = "DELETE FROM blog_posts WHERE post_id = '$postid'";
	mysqli_query($con,$strSQL);
	header("location: homeUser.php"); 
?>
