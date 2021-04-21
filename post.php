<?php
session_start();
include('dbcon.php');
if (isset($_POST["add"])) {
	print_r($_POST);
	$user_id = $_SESSION["id"];
	$title = $_POST["post"];
	$dis = $_POST["dis"];
	$qry = "INSERT INTO post('post_id, 'post_user', 'post_title', 'post_dis') VALUES (NULL, '$user_id', '$title', '$dis')";
	if (mysqli_query($con, $qry)) {
		$_SESSION["msg"] = "Post Added";
		header('location:index.php');
	} else {
		$_SESSION["msg"] = "Error";
		header('location:index.php');
	}
}
?>
<?php include('header.php'); ?>
<main class="">
	<div class="container mb-5">
		<?php include('alert.php'); ?>
		<div class="row">
			<?php
			if (isset($_SESSION["id"])) {
			?>
				<div class="col-12 mt-5">
					<form method="post">
						<div class="card">
							<div class="card-header">
								<div class="form-group mb-1">
									<label><b>Post Title :</b></label>
									<input type="text" name="title" class="form-control">
								</div>
							</div>
							<div class="card-body">
								<div class="form-group mb-0">
									<label><b>Post Discription :</b></label>
									<textarea name="dis" class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="card-footer">
								<input type="submit" class="btn btn-success" name="add" value="Add Note">
							</div>
						</div>
					</form>
				</div>
				<div class="col-12 mt-5">
					<div class="row">
						<?php
						$user_id = $_SESSION["id"];
						$qry = "SELECT * FROM post WHERE 'post_user' = 'id'";
						$result = mysqli_query($con, $qry);
						while ($post = mysqli_fetch_assoc($result)) {
						?>
							<div class="col-3 ">
								<div class="card h-100">
									<div class="card-header">
										<?php echo $post["post_title"]; ?>
									</div>
									<div class="card-body">
										<?php echo $post["post_dis"]; ?>
									</div>
									<div class="card-footer">
										<a href="editp.php?id=<?php echo $post["post_id"]; ?>"><button class="btn btn-success">Edit</button></a>
										<a href="deletep.php?id=<?php echo $post["post_id"]; ?>"><button class="btn btn-success ml-3">Delete</button></a>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			<?php
			} else {
			?>
				<div class="col-12 mt-5 ">
					<h2>Welcome to PHP Notes.</h2>
					<h3>Login or Register to Save Your Content</h3>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</main>
<?php include('footer.php'); ?>