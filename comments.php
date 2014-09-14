<?php
if($user)$author = $user;
if($user_stud)$author = $user_stud;
echo'<div class="detailBox">
    <div class="titleBox">
      <label>Comments</label>
    </div>
    <div class="actionBox">
        <ul class="commentList">';


$strSQLcom = "SELECT * FROM comments ORDER BY id DESC";
$querycom = mysqli_query($con,$strSQLcom); 
while($comment = mysqli_fetch_array($querycom)) {
	if($comment['postid'] == $row['post_id']) {
		echo'<li>
                <div class="commenterImage">
                  <img src="./css/images/blank.png" />
                </div>
                <div class="commentText">
		    <h5 class="header">'.$comment['author'].'</h5>
                    <p>'.$comment['comments'].'</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
                </li>';
	}
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
                <button class="btn btn-default" type="submit">Comment</button>
            </div>
        </form>';
}
echo '
    </div>
</div>';

?>



            
        
