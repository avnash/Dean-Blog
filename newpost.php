<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Dean's Blog | New Post</title>
 
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

	<?php include 'header_signin.php'; ?>
	
	<div class="wrapper">
	    <form class="form-horizontal col-md-6 col-md-offset-3" role="form" action="insertpost.php" method="POST" >
	 
		<div class="form-group">
		    <label for="name" class="col-md-3">Title</label>
		    <div class="col-md-10">
		        <input type="text" class="form-control" id="name" placeholder="Name" name="blogtitle">
		    </div>
		</div>
	 
	 
		<div class="form-group">
		    <label for="message" class="col-md-3">Content</label>
		    <div class="col-md-10">
		        <textarea class="form-control" id="message" placeholder="Message" name="content"></textarea>
		    </div>
		</div>
	 
		<div class="form-group">
		    <div class="col-md-6 text-right">
		        <button type="submit" class="btn btn-lg btn-primary">Post</button>
		    </div>
		</div>
	    </form>  
	</div>
	
        <?php include 'footer.php'; ?>

</body>
</html>


