<?php 
require '../../config/config.php';
	if(isset($_GET['post_id']))
		$post_id = $_GET['id'];
	if(isset($_POST['result'])) {
		if($_POST['result'] == 'true')
			$query = mysqli_query($con, "DELETE FROM posts WHERE posts.id='$post_id'");
	}
?>