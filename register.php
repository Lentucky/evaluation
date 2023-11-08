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
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
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

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_users SET 
            username='$username',
            full_name='$full_name',
            email='$email',
            password='$password',
            evaluator='$evaluator'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql);

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Register Success.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'login.php');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to register.</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'register.php');
        }

    }
    
?>