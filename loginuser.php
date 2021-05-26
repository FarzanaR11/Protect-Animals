<?php
session_start();

?>
<?php include 'header.php'; ?>
    <?php
      include 'dbcon.php';
    ?>
<?php
      
  if(isset($_POST['submituser'])){
    $email = $_POST['emailu'];
    $password = $_POST['passwordu'];

    $email_search = "select * from registration where email='$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $pass_decode = password_verify ($password, $db_pass);

          if($pass_decode)
          {
            $_SESSION['login'] = true;
            $_SESSION['user'] = 'user';
            $_SESSION['username'] = $email_pass['username'];
            echo "<script>alert('password correct and log sucess')</script>";
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
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6 mt-2 ml-5 bg-secondary mb-2 p-3">
        <h2 class="bg-success text-center p-3 text-light">User login</h2>
        <form class="p-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
          <table width="100%">
            <tr>
              <td><label>Email</label></td>
              <td><input type="email" name="emailu" class="form-control" placeholder="Enter email"></td>
            </tr>
            <tr>
              <td><label>Password</label></td>
              <td><input type="password" name="passwordu" class="form-control" placeholder="Enter password"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><button class="btn btn-primary" type="submit" name="submituser">Login</button></td>
            </tr>
            
          </table>  <br>

           <a class="center" href="forget.php">forget password?</a>
          <br>
            <p class="float-left">Not have an account?&nbsp;</p>
            <a class="right" href="regis.php">Signup</a>
            </tr>
            
          </form>
      </div>
      <div class="col-md-6"></div>
    </div>
      
      
  </section>
      

    <?php include 'footer.php'; ?>
  </body>
</html>
