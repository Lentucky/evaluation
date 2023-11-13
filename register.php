<?php 

    include('config/constants.php'); 
?>


<html>
<head>
    <title>Register</title>
    

    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>

    <?php 
        if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
        {
            echo $_SESSION['add']; //Display the SEssion Message if SEt
            unset($_SESSION['add']); //Remove Session Message
        }
        
    ?>
  <section>
  <div id="yourElement">
      <ul>
        <li><a href="login.php">Back to login</a></li>
      </ul>
    </div>    

    <div class="form-box">
      <div class="form-value">
        <h2>Register</h2>
        <div class="form-wrapper">
          <form action="" method="POST">
                        
                        
                
                        <div class="inputbox">
                        
                        <input type="text" name="username" required>
                        <label for="">Username</label>

                        <ion-icon name="person"></ion-icon>
                        </div>


                        <div class="inputbox">
                        
                        <input type="text" name="full_name" required>
                        <label for="">Fullname</label>

                        <ion-icon name="person-circle"></ion-icon>
                        </div>


                        <div class="inputbox">
                        
                        <input type="email" name="email" required>
                        <label for="">Email</label>

                        <ion-icon name="mail"></ion-icon>
                        </div>


                        <div class="inputbox">
                        
                        <input type="password" name="password" required>
                        <label for="">Password</label>

                        <ion-icon name="lock-closed"></ion-icon>
                        </div>

                        <div style="text-align: center;">
                        <div class = "radio">
                            <span class="radio-group">
                                <input type="radio" name="evaluator" value="Yes"> 
                                <label for="evaluator-yes">Evaluator</label>
                                <input type="radio" name="evaluator" value="No">
                                <label for="evaluator-no">Participant</label>
                            </span>
                        </div>
                        </div>

                            <div class = "register">
                                <input type="submit" name="submit" value="Register" class="login-button">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>


<?php 


    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        if(isset($_POST['evaluator']))
        {
            $evaluator = $_POST['evaluator'];
        }
        else
        {
            $evaluator = "No"; //SEtting the Default Value
        }
        //$password = md5($_POST['password']); //Password Encryption with MD5

        $sql = "INSERT INTO tbl_users SET 
            username='$username',
            full_name='$full_name',
            email='$email',
            password='$password',
            evaluator='$evaluator'
        ";
 
        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
            $_SESSION['add'] = "<div class='success'><h2>Register Success.</h2></div>";

            header("location:".SITEURL.'login.php');
        }
        else
        {
            $_SESSION['add'] = "<h2>Failed to register.</h2>";

            header("location:".SITEURL.'login.php');
        }

    }
    
?>