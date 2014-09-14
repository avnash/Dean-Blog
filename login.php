<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Sign In</title>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
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

  <div class="wrapper">
    <form class="form-signin" action = "checklogin.php" method = "POST">      
 
      <h2 class="form-signin-heading">Sign In</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
  <?php
	
	if($error == "usr") echo 'Incorrect User';
	if($error == "pwd") echo 'Incorrect password';
  ?>



		<?php include 'footer.php'; ?>
	

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>

</html>
