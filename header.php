<?php
#Header for index
if(!$user && !$user_stud){
	echo '
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">        
	    <div class="container">
		<div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		    <a href="index.php" class="navbar-brand">The Dean\'s Blog<span class="glyphicon glyphicon-pencil"></span></a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

		    <ul class="nav navbar-nav">
		        <li ><a href="index.php">Home</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right"><li><a href="login.php">Sign In</a></li>
		<li class="top"><img src="./css/images/blank.png"  height="18" width="18" /><em class="small">Not logged in</em></li></ul></ul>
		</nav> 
	    </div>
	</header>';
}
#header for Dean
else if($user) {
	echo '
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">        
	    <div class="container">
		<div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		    <a href="homeUser.php" class="navbar-brand">The Dean\'s Blog<span class="glyphicon glyphicon-pencil"></span></a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		    
		    <ul class="nav navbar-nav">
		        <li ><a href="homeUser.php">Home</a></li>
		        
			<li><a href="newpost.php">New Post</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right"><li><a href="logout.php">Sign Out</a></li>
		<li class="top"><img src="./css/images/blank.png"  height="18" width="18" /> '.$fullname.'</li></ul>
		</nav>
	    </div>
	</header>';
}
#Header for any other student
else {
	echo '
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">        
	    <div class="container">
		<div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		    <a href="homeUser.php" class="navbar-brand">The Dean\'s Blog<span class="glyphicon glyphicon-pencil"></span></a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		    
		    <ul class="nav navbar-nav">
		        <li ><a href="homeUser.php">Home</a></li>
		        
			
		    </ul>
		    <ul class="nav navbar-nav navbar-right"><li><a href="logout.php">Sign Out</a></li>
			<li class="top small"><img src="./css/images/blank.png"  height="18" width="18" /> '.$fullname.'<br>&nbsp&nbsp&nbsp&nbsp&nbsp'.$user_stud.' </li?
		    </ul>
		</nav>
	    </div>
	</header>';
}

##SEARCH BOX--TO IMPLEMENT	
#<form class="navbar-form navbar-right" role="search">
#              <div class="form-group">
#                <input type="text" class="form-control" placeholder="Search">
#              </div>
#              <button type="submit" class="btn btn-default">Submit</button>
#            </form>
?>
