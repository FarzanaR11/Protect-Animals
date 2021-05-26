
<?php
session_start();
?>
<?php include 'header.php'; ?>
    <?php
      include 'dbcon.php';
    ?>
<?php
include_once 'dbcon.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];

   // $result = "select * from registration where email='$email'";
    $result = mysqli_query($con,"SELECT * FROM registration where email='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['id'];
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_id==$email_id) {
				        $to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: cse327" . "\r\n" .
                "CC: ";
                mail($to,$subject,$txt,$headers);
          echo 'SUCCESSFULL';
			}
				else{
					echo 'Invalid userid';
				}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<div style=" height:500px;padding-top: 30px">
<h1>Forget Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
