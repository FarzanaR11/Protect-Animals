<?php include 'header.php'; ?>	
<?php
	include 'dbcon.php';
	 if(isset($_POST['submitvol'])){
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email =  mysqli_real_escape_string($con, $_POST['email']);
		$mobile =  mysqli_real_escape_string($con, $_POST['mobile']);
		$division =  mysqli_real_escape_string($con, $_POST['division']);
		$postcode =  mysqli_real_escape_string($con, $_POST['postcode']);
		$password =  mysqli_real_escape_string($con, $_POST['password']);
		$cpassword =  mysqli_real_escape_string($con, $_POST['cpassword']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
		$emailquery = " select * from registration where email = '$email'";
		$query = mysqli_query($con, $emailquery);
		$emailcount = mysqli_num_rows($query);

		$insertquery = "insert into volunteer(username, email, mobile, division, postcode, password, cpassword) values('$username', '$email', '$mobile', '$division', '$postcode', '$pass', '$cpass')";
		
		$iquery = mysqli_query($con, $insertquery);
		if ($iquery) {
	        echo "Inserted Successfully";
	    }else{
	        echo "Not Inserted";
        }

    }
?>
<div class="container-fluid bg-info">
	<div class="row">
		<div class="col-md-3">
			....
		</div>
		<div class="col-md-5 bg-light mt-5">
			<h2 class="text-center text-info mt-2 p-2 bg-secondary">Volunteer Register</h2>
			<div class="p-2">
				<div class="image"><img class="rounded mx-auto d-block" src="img/animal3.jpg" width="100"></div>
				<div class="text-center text-success h2">ProtectPets</div>
				<div class="text-center text-muted">Participate with our community</div>
			</div>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
				<div class="form-group">
				    <input type="username" name="username" placeholder="username" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="email" name="email" placeholder="email" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="text" name="mobile" placeholder="Phone" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="text" name="division" placeholder="Division" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="number" name="postcode" placeholder="Password" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="password" name="password" placeholder="Password" class="form-control" required>
				</div>
				<div class="form-group">
				    <input type="password" name="cpassword" placeholder="Re-type Password" class="form-control" required>
				</div>
				<input type="submit" name="submitvol" value="Register Now" class="btn btn-success">
				<table class="">
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td></td>
					</tr>
					
				</table>
				<p>Already have an account?&nbsp;<a href="login.php">Login</a></p>
			</form><br><br>
		</div>
		<div class="col-md-3">
			....
		</div>
	</div>
</div>


	


	<?php include 'footer.php'; ?>
	
</body>
</html>
