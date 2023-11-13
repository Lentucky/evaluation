<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <link rel="stylesheet" href="css/index.css">
  <title>Log-in</title>

</head>
<body>  
    <div class = "background">
    <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add']; 
            unset($_SESSION['add']); 
        }

        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
    ?>
    <section>
        
    <div class="form-box-login">
  <div class="form-value">
    <h2>Login</h2>
    <form action="" method="POST">

      <div class="inputbox">
        <input type="text" name="username" required>
        <label for="">Username</label>
        <ion-icon name="person"></ion-icon>
      </div>

      <div class="inputbox">
  <input type="password" name="password" id="passwordInput" required>
  <label for="passwordInput">Password</label>
  <ion-icon name="lock-closed-outline"></ion-icon>

  
</div>

      <div class="showPasswordBtn">
        <div class="showpasscolor">
        <label for=""><input type="checkbox" id="showPasswordBtn" onclick="togglePassword()">Show Password</label>
        </div>
            <script>
                function togglePassword() {
                    var passwordInput = document.getElementById('passwordInput');
                    var showPasswordBtn = document.getElementById('showPasswordBtn');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    showPasswordBtn.textContent = 'Hide Password';
                } else {
                passwordInput.type = 'password';
                showPasswordBtn.textContent = 'Show Password';
                }
            }
</script>
      </div>

      <div>
        <input type="submit" name="submit" value="Login" class="login-button">
      </div>

      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</div>

        
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
</body>
</html>

<?php 

    if(isset($_POST['submit']))
    {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        $sql = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password' ";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);
        $count = mysqli_num_rows($res);
        $evaluator = $row['evaluator'];
        $user_id = $row['user_id'];

        if($count==1)
        {
            $_SESSION['login'] = "<h2>Login Successful $logged_id.</h2>";
            $_SESSION['user'] = $username; 
            $_SESSION['evaluator'] = $evaluator;
            $_SESSION['logged_id'] = $user_id;

            header('location:'.SITEURL.'index.php');
        }
        else
        {
            $_SESSION['login'] = "<h2>Username or Password did not match.</h2>";

            header('location:'.SITEURL.'login.php');
        }


    }

?>