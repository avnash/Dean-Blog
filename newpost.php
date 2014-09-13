<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Dean's Blog | New Post</title>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
	session_start(); 
	   if($_SESSION['user']){ 
	   }
	   else {
	      header("location: index.php"); 
	   }
?>
<body>

	<?php include 'header_signin.php'; ?>

	<div class="wrapper">
	    <form class="form-horizontal col-md-10 col-md-offset-1" role="form" action="insertpost.php" method="POST" >
	 
		<div class="form-group">
		    <label for="name" class="col-md-8 header"><h3><b>Title</b></h3></label>
		    <div class="col-md-12">
		        <input type="text" class="form-control" id="name" placeholder="Name" name="blogtitle"/>
		    </div>
		</div>
	 
	 	
		<div class="form-group">
		    <label for="message" class="col-md-3 header"><h3><b>Content</b></h3></label>
		    <div class="col-md-12">
			 <textarea class="form-control" id="message" placeholder="Message" name="content"></textarea>
		    </div>
		</div>
	 
		<div class="form-group">
		    <div class="col-md-6 col-md-offset-3 text-right">
		        <button type="submit" class="col-md-12 btn btn-lg btn-primary">Post</button>
		    </div>
		</div>
		<script type="text/javascript">
			CKEDITOR.replace( 'message' );
		</script>
	    </form>  
	</div>
<!-- SOMETHING IS WRONG HERE-->


</body>
</html>


