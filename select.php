<?php
   require 'dbcon.php';

  $sql = "SELECT * FROM registration";
  $get_data = mysqli_query($con, $sql);

  if (mysqli_num_rows($get_data) > 0) {
  	echo '<table>
  	<tr>
  	<th>User Name</th>
  	<th>Email</th>
  	<th>Division</th>
  	<th>Post Code</th>

  	</tr>';
  	while ($row = mysqli_fetch_assoc($get_data)) {
  		

  		echo '<tr>
  		<td>'.$row['username'].'</td>
  		<td>'.$row['email'].'</td>
  		<td>'.$row['division'].'</td>
  		<td>'.$row['postcode'].'</td>

      <td>
      <a href="edit.php?id='.$row['id'].'">Edit</a>
      <a href="delete.php?id='.$row['id'].'">Delete</a>
      </td>
      </tr>';
  	}
  }
?>