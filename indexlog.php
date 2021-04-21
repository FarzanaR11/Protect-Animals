


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
  </head>
  <body>
    <?php
      include 'dbcon.php';

      if(isset($_POST['submit'])){
       $email = $_POST['email'];
       $password = $_POST['password'];

       $email_search = "select * from registration where email='$email'";
       $query = mysqli_query($con, $email_search);

       $email_count = mysqli_num_rows($query);

        if($email_count){
         $email_pass = mysqli_fetch_assoc($query);

         $db_pass = $email_pass['password'];

         $pass_decode = password_verify ($password, $db_pass);

          if($pass_decode)
          {
           echo "login successfull";
          }else{ 

          echo "password incorrect";
          }
  
        }else{

        echo "Invalid email";
        }
    
      }  
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
      <h2>User login</h2>
      
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter email">

      <label>Password</label>
      <input type="password" name="password" placeholder="Enter password">
      <button type="submit" name="submit">Login</button>
      <br>
      <div class="footer">
      <p>Not have an account?&nbsp;<br><a href="regis.php">Signup</a></p>
    </div>
    </form>

    <?php include 'footer.php'; ?>
  </body>
</html>
