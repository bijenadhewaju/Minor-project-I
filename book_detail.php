<?php
include("includes/header.php");

include("includes/connection.php");

$bid = $_GET['id'];

$book_query = "select * from book where b_id=$bid";

$book_res = mysqli_query($link, $book_query);

$book_row = mysqli_fetch_assoc($book_res);
?>

<div id="book-content">
	<?php echo (isset($_SESSION['msg']) ? $_SESSION['msg'] : "") ?>
	<div class="detail-post">
		<div class="entry">
			<div class="img_wrapper">
				<img class="book_img" src="<?php echo $book_row['b_img']; ?>">
			</div>
					<div class="description">
						<h1><?php echo $book_row['b_nm']; ?></h1>
						<p><b>Author Name:</b><?php echo $book_row['author_name']; ?></p>
						<p><b>ISBN:</b><?php echo $book_row['isbn']; ?></p>
						<p><b>Details:</b><?php echo $book_row['b_desc']; ?></p>
						<?php
			if (isset($_SESSION['client']['status'])) { ?>
				<form method="post" action="review_process.php">
					<input type="hidden" name="uid" value="<?php echo $_SESSION['client']['id']; ?>" />
					<input type="hidden" name="bid" value="<?php echo $book_row['b_id']; ?>" />
					<div class="form-group">
						<textarea placeholder="write a review" name="review" rows="3"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="submit" class="btn" />
					</div>
				</form>
			<?php
			}
			?>
					</div>
		</div>
	</div>

	
			<div class="review-row">
				<h1>Reviews</h1>
				<?php 
					$_q = "select * from review JOIN register ON review.uid=register.r_id where bid='$bid'";
					$_query = mysqli_query($link,$_q);
					while($res = mysqli_fetch_assoc($_query)){
						?>
							<div class="review-box">
								<h2><?php echo $res['r_fnm']; ?></h2>
								<span><?php echo $res['r_email']; ?></span>
								<p><?php echo $res['review']; ?></p>
							</div>
						<?php
					}
					
				?>
			</div>



		</div>
	</div>
</div><!-- end #content -->

<?php
include("includes/footer.php");
?>