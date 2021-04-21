<?php

$server= "localhost";
$user= "root";
$password = "";
$db = "animal_welfare";

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
	?>
	<script >
		alert("");
	</script>
	<?php  
}else{
	?>
	<script >
		alert("");
	</script>
	<?php
}
?>