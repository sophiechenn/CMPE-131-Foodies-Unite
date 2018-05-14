<?php include('commentserver.php'); ?>

<!DOCTYPE html>
<head>

	<link rel="stylesheet" type="text/css" href="headerstyle.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
<div class = "header">
		<h1><center> Review </center></h1>
	</div>
	<div class = "col-2 menu">
			<ul>
				<li><a href = "index.php">Home</a></li>
				<li><a href = "search.php">Search</a></li>
				<li><a href = "aboutus.html">About Us</a></li>
				<li><a href = "contactus.php">Contact Us</a></li>
				<li><a href = "writereview.php">Write a Review</a></li>			
			</ul>
		</div>
<div class="col-8 menu">

	<div class="row">
		<div class="col-md-6 col-md-offset-3 post">
			<h2><?php echo $post['name'] ?></h2>
			<p><?php echo $post['location']; ?></p>
			<p><?php echo $post['review']; ?></p>
			<p><?php echo $post['tag']; ?></p>
			<p> <?php 
			$db = mysqli_connect('localhost', 'root', '', 'loginDB');
			$var= mysqli_query($db, "SELECT * FROM review WHERE ID=".$_GET['id'].""); //change where id=1 to get the specific post thats needed
			$post = mysqli_fetch_assoc($post_query_result);
			while($post=mysqli_fetch_array($var))
			{
				echo "<div id='img_div'>";
				echo "<img src='images/".$post['image']."' width=100% />";
				echo "</div>";
			}
			
			?></p>
			
		</div>
		<div class="col-md-6 col-md-offset-3 comments-section">
			
			<?php if (isset($user_id)): ?>
				<form class="clearfix" action="review_details.php" method="post" id="comment_form">
					<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
					<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
				</form>
			<?php else: ?>
				<div class="well" style="margin-top: 20px;">
					<h4 class="text-center"><a href="#">Sign in</a> to post a comment</h4>
				</div>
			<?php endif ?>
			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count"><?php echo count($comments) ?></span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
			<?php if (isset($comments)): ?>
				<!-- Display comments -->
				<?php foreach ($comments as $comment): ?>
				<!-- comment -->
				<div class="comment clearfix">
					<div class="comment-details">
						<span class="comment-name"><?php echo getUsernameById($comment['user_id']) ?></span>
						<span class="comment-date"><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></span>
						<p><?php echo $comment['body']; ?></p>
						
					</div>
				</div>
					<!-- // comment -->
				<?php endforeach ?>
			<?php else: ?>
				<h2>Be the first to comment on this post</h2>
			<?php endif ?>
			</div><!-- comments wrapper -->
		</div><!-- // all comments -->
	</div>
</div>


<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="scripts.js"></script>



</body>
</html>