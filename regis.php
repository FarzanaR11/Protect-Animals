<?php include 'header.php'; ?>
<?php
	include 'dbcon.php';
	 if(isset($_POST['submit'])){
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
		if ($emailcount == 0) {
			$insertquery = "insert into registration(`username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`) values('$username', '$email', '$mobile', '$division', '$postcode', '$pass', '$cpass')";
			
			$iquery = mysqli_query($con, $insertquery);
			if ($iquery) {
		        echo "Inserted Successfully";
		    }else{
		        echo "Not Inserted";
	        }
		}else{
			echo "Already exists this mail";
		}
			

    }
	
?>
<div class="container-fluid bg-info">
	<div class="container ">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-5 bg-light mt-5">
				<h2 class="text-center text-info mt-2 p-2 bg-secondary">User Register</h2>
				<div class="p-2">
					<div class="image"><img class="rounded mx-auto d-block" src="img/animal3.jpg" width="100"></div>
					<div class="text-center text-success h2">ProtectPets</div>
					<div class="text-center text-muted">Participate with our community</div>
				</div>
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" id="form-box">
					<div class="input">
						<input type="text" name="username" placeholder="Username" class="inp" required>
					</div>

					<div class="input">
						<input type="email" name="email" placeholder="E-mail" class="inp" required>
					</div>
					
					<div class="input">
						<input type="text" name="mobile" placeholder="Phone" class="inp" required>
					</div>
					
					<div class="input">
						<input type="text" name="division" placeholder="Division" class="inp" required>
					</div>
				   
					<div class="input">
						<input type="number" name="postcode" placeholder="Post Code" class="inp" required>
					</div>
					
					<div class="input">
						<input type="password" name="password" placeholder="Password" class="inp" required>
					</div>
					
					<div class="input">
						<input type="password" name="cpassword" placeholder="Re-type Password" class="inp" required>
					</div>

					<input type="submit" name="submit" class="btn btn-success" value="Register Now" class="sub-btn">
				</form>	
				<p>Already have an account?&nbsp;<a href="loginuser.php">Login</a></p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</div>
	



	<?php include 'footer.php'; ?>
	
</body>
</html>
