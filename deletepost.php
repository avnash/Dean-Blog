<?php
	$postid = $_POST['id'];
	$con = mysqli_connect("localhost", "root","a","DeanBlog") or die(mysql_error()); //Connect to server
	$strSQL = "DELETE FROM blog_posts WHERE post_id = '$postid'";
	$strSQL1 = "DELETE FROM comments WHERE postid = '$postid'";
	mysqli_query($con,$strSQL);
	mysqli_query($con,$strSQL1);
	header("location: homeUser.php"); 
?>
