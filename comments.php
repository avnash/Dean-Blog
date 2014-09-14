<?php
if($user)$author = $user;
if($user_stud)$author = $user_stud;
echo'<br><hr><br>
    <div class = "x">
    <div class="titleBox">
      <label class="fontpara">Comments</label>
    </div>

  <div class="actionBox">
        <ul class="commentList">';


$strSQLcom = "SELECT * FROM comments ORDER BY id DESC";
$querycom = mysqli_query($con,$strSQLcom); 
$flag = 0;
while($comment = mysqli_fetch_array($querycom)) {
	if($comment['postid'] == $row['post_id']) {
		$flag = 1;
		echo'<li>
                <div class="commenterImage">
                  <img src="./css/images/blank.png" />
                </div>
                <div class="commentText">
		    <h5 class="header">'.$comment['author'].'</h5>
                    <p>'.$comment['comments'].'</p> <span class="date sub-text">on September 13th, 2014</span>
                </div>
                </li>';
	}
		
}
if($flag == 0) {
	echo '  <li>
                <div class="commentText">
                    <p class = "fontpara"><em>No comments</em></p>
                </div>
                </li>';
}
echo '</ul><hr>';
if($user || $user_stud) {
echo '
        <form class="form-inline" role="form" action="addcomment.php" method="POST">
            
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" name="comm" />
            </div>
            
            <div class="form-group">
		<input type="hidden" name="pid" value="'.$row['post_id'].'">
		<input type="hidden" name="author" value="'.$author.'">
                <button class="btn btn-default" type="submit">Add</button>
            </div>
        </form>';
}
echo '
    </div>
</div>
';

?>



            
        
