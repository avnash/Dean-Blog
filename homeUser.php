<!DOCTYPE html>
<head>
		
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	     
	    <title>Welcome!</title>
	 
	    <!-- Bootstrap -->
	    <!-- Latest compiled and minified CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/stylesheet.css" rel="stylesheet">
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
		$user = $_SESSION['user']; 
		$id = $_SESSION['id'];
	}
	else if($_SESSION['user_stud']){
		$user_stud = $_SESSION['user_stud']; 
		$id_stud = $_SESSION['id_stud'];
	}
	else {
		header("location: index.php"); 
	}
	
?>
<body>
	<div class='background'>
	<?php include 'header.php'; ?>
	<div class="container col-md-12 col-xs-12">
	  
	    
	  <div class="row col-md-12 col-xs-12">
	    
	    <div class="col-md-12 col-xs-12"><h3 class="header">Latest Posts</h3>
		  	
	      <!-- tabs left -->
	      <div class="tabbable tabs-left">
		<ul class="nav nav-tabs col-md-4 col-xs-4">
		<?php
			$con = mysqli_connect("localhost", "root","testmysql123","DeanBlog") or die(mysql_error());
			$strSQL = "SELECT * FROM blog_posts ORDER BY post_id DESC";
			
			$query = mysqli_query($con,$strSQL); 
			
			$i = 0;
		
			while($i<7) {
			  $row = mysqli_fetch_array($query);
			  if($row == NULL)break;
			  if($i == 0)echo' <li class="active"><a href="#'.$row['post_id'].'" data-toggle="tab">'.$row['post_title'].'</a></li>';
			  else echo' <li><a href="#'.$row['post_id'].'" data-toggle="tab">'.$row['post_title'].'</a></li>';
			  $i = $i+1;
			}

			echo '</ul>		
			<div class="col-md-7 col-xs-7 tab-content">';
			$query1 = mysqli_query($con,$strSQL); 
			$j = 0;

			while($j<7) {
			   $row = mysqli_fetch_array($query1);
			   if($row == NULL)break;
			   if($j == 0) {
			     echo '<div class="tab-pane active" id="'.$row['post_id'].'"><h1>'.$row['post_title'].'</h1><span id="lightcolor" class="glyphicon glyphicon-time">&nbsp'.$row['post_date'].'</span>';
			     if($user) {
				 echo '<form id="delete" method="POST" action="deletepost.php">
				 <input type="hidden" name="id" value="'.$row['post_id'].'">
				 <button type="submit" class="btn btn-default delete">Delete</button> 
				 </form>';
			     }
			     echo '<hr><p>'.$row['content'].'</p>';
			     #COMMENTS-------------------
			     include 'comments.php';
			     echo '</div>';   
			    }
			 else {
			     echo '<div class="tab-pane" id="'.$row['post_id'].'"><h1>'.$row['post_title'].'</h1><span id="lightcolor" class="glyphicon glyphicon-time">&nbsp'.$row['post_date'].'</span>';
			     if($user) {
				 echo '<form id="delete" method="POST" action="deletepost.php">
				 <input type="hidden" name="id" value="'.$row['post_id'].'">
				 <button type="submit" class="btn btn-default delete">Delete</button> 
				 </form>';
			     }
			     echo '<hr><p>'.$row['content'].'</p>';
			      #COMMENTS-------------------
			     include 'comments.php';
			     echo '</div>';  
			  }
			 $j = $j+1;
			}
		?>

	      </div> 
	      
	    </div>
	    
	   </div>
	  <hr>
	

	</div>


	
	<?php include 'footer.php'; ?>
		
</body>
</html>



