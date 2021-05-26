<?php
session_start();

?>
<?php include 'header.php'; ?>
    <?php
      include 'dbcon.php';

      if(isset($_POST['submitvol'])){
       $email = $_POST['emailv'];
       $password = $_POST['passwordv'];

       $email_search = "select * from volunteer where email='$email'";
       $query = mysqli_query($con, $email_search);

       $email_count = mysqli_num_rows($query);

        if($email_count){
         $email_pass = mysqli_fetch_assoc($query);

         $db_pass = $email_pass['password'];

         $pass_decode = password_verify ($password, $db_pass);

          if($pass_decode)
          {
            $_SESSION['login'] = true;
            $_SESSION['user'] = 'volunteer';
            $_SESSION['username'] = $email_pass['username'];
            header("Location: homeu.php");
            exit();
          }else{ 

          echo "<script>alert('password incorrect')</script>";
          }
  
        }else{

        echo "<script>alert('Invalid email')</script>";
        }
      }  
?>
  
  <section class="container ">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 mt-2 mr-5 bg-secondary mb-2 p-3">
        <h2 class="bg-success text-center p-3 text-light">Volunteer login</h2>
        <form class="p-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
          <table width="100%">
            <tr>
              <td><label>Email</label></td>
              <td><input type="email" name="emailv" class="form-control" placeholder="Enter email"></td>
            </tr>
            <tr>
              <td><label>Password</label></td>
              <td><input type="password" name="passwordv" class="form-control" placeholder="Enter password"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><button class="btn btn-primary" type="submit" name="submitvol">Login</button></td>
            </tr>
            
          </table>
          <br>
            <p class="float-left">Not have an account?&nbsp;</p>
            <a class="right" href="regisv.php">Signup</a>
            </tr>
            
          </form>
      </div>
      <div class="col-md-3">
        
      </div>
    </div>
      
      
  </section>
      

    <?php include 'footer.php'; ?>
  </body>
</html>
