<?php 

    include('config/constants.php'); 
?>


<html>
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="css/admin.css">
    </head>
    
<body>
    <!-- Menu Section Starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- Menu Section Ends -->

    <div class="main-content">
        <div class="wrapper">
            <h1>Add Participant</h1>

            <br><br>

            <?php 
                if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
                {
                    echo $_SESSION['add']; //Display the SEssion Message if SEt
                    unset($_SESSION['add']); //Remove Session Message
                }
            ?>

            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username" placeholder="Your Username">
                        </td>
                    </tr>

                    <tr>
                        <td>Full Name: </td>
                        <td>
                            <input type="text" name="full_name" placeholder="Enter Your Name">
                        </td>
                    </tr>

                    <tr>
                        <td>Email: </td>
                        <td>
                            <input type="text" name="email" placeholder="Enter Your Email">
                        </td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password" placeholder="Your Password">
                        </td>
                    </tr>

                    <tr>
                        <td>Evaluator: </td>
                        <td>
                            <input type="radio" name="evaluator" value="Yes"> Yes 
                            <input type="radio" name="evaluator" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>

    <!-- Footer Section Starts -->
    <div class="footer">
                <div class="wrapper">
                    <p class="text-center">2023, Developed by - <a href="#"> TEAM ATOT</a></p>
                </div>
            </div>
        <!-- Footer Section Ends -->

    </body>
</html>


<?php 


    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

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
            $_SESSION['add'] = "<div class='success'>Register Success.</div>";

            header("location:".SITEURL.'login.php');
        }
        else
        {
            $_SESSION['add'] = "<div class='error'>Failed to register.</div>";

            header("location:".SITEURL.'register.php');
        }

    }
    
?>