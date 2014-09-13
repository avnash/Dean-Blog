<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Dean's Blog</title>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
 
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     
</head>
<body>
 
    	<?php include 'header.php'; ?>
 

	<div class="container">
	<div class="row col-md-8 col-md-offset-2">
	<div class="">
		 
	<h1>Latest Posts</h1>
		 
			    <!-- list of posts -->
			 
		<?php
			$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
			$strSQL = "SELECT * FROM blog_posts ORDER BY post_id DESC";
			$query = mysqli_query($con,$strSQL); 
			while($row = mysqli_fetch_array($query)) {
				
					echo ' <article>
				
					<h2><a href="#">'.$row['post_title'].'</a></h2>
			 		
					<div class="row">
					    <div class="group2 col-sm-6 col-md-6">
					       <span class="glyphicon glyphicon-time"></span>'. $row['post_date'].'                        
					    </div>
					</div>
			 
					';
					echo '<p class="lead">'.$row['content'].'</p>';
					echo  '</article><hr>';
			}
		?>
		 
		</div>
		</div>
		</div>
	<footer>
		<?php include 'footer.php'; ?>
	</footer>
</body>
</html>
