<!DOCTYPE html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title> Welcome to the Dean's Blog </title>
	</head>

	<body>
	<div class = 'header'>
	<?php include 'header.php';?>
	</div>
	<p> Welcome!</p>
	<?php //View all feeds
		$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
		$strSQL = "SELECT * FROM blog_posts";
		$query = mysqli_query($con,$strSQL); 
		while($row = mysqli_fetch_array($query)) {
			echo $row['post_title'].'by'.$row['author_name'].'on'.$row['post_date'];
			echo '<p>'.$row['content'].'</p>';
		}
	?>
	</body>
</html>
